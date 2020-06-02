<?php

namespace App\Http\Controllers;

use App\User;
use App\View\Components\DataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function datatable()
    {
        $users = User::all(['id', 'name', 'username', 'email', 'photo']);
        return DataTables::of($users)->addColumn('action', function ($data) {
            $edit = '<button onclick="edit_data(' . $data->id . ')" class="btn btn-sm btn-primary"><i class="flaticon flaticon-pencil"></i> Edit</button>';
            $delete = '<button onclick="delete_data(' . $data->id . ')" class="btn btn-sm btn-danger"><i class="flaticon flaticon-close"></i> Delete</button>';
            $action = '<div class="btn-group" role="group" aria-label="Basic example">' . $edit . $delete . '</div>';
            return $action;
        })->rawColumns(['action'])->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $header_table = [
            'id' => 'ID',
            'email' => 'Alamat Email',
            'name' => 'Nama Lengkap',
            'username' => 'Username',
            'action' => 'Action'
        ];
        return view('user.index', compact('header_table'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $image = $request->file('photo');
        $name = 'image-'.rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('img'), $name);
        $input['photo'] = $name;
        $input['password'] = Hash::make($request->password);
        $input['api_token'] = Str::random(80);
        User::create($input);
        return response()->json('Success');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $pegawai)
    {
        $pegawai = $pegawai->only(['name', 'email', 'password',
            'username', 'photo']);
        return response()->json($pegawai);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $pegawai)
    {
        $input = $request->all();
        $pegawai->update($input);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $pegawai)
    {
        $pegawai->delete();
    }
}
