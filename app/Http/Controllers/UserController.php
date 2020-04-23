<?php

namespace App\Http\Controllers;

use App\User;
use App\View\Components\DataTable;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function datatable()
    {
        $users = User::all(['id', 'name', 'username', 'email', 'photo']);
        return DataTables::of($users)->addColumn('action', function ($data) {
            $update = '<a href="javascript:void(0)" class="btn btn-primary">' . $data->id . '</a>';
            return $update;
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
        $input['photo'] = $request->file('photo')->getClientOriginalName();
        return response()->json($input);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
