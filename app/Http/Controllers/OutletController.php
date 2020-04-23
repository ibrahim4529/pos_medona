<?php

namespace App\Http\Controllers;

use App\Outlet;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OutletController extends Controller
{
    public function datatable()
    {
        $outlets = Outlet::all(['id', 'name', 'phone', 'address']);
        return DataTables::of($outlets)->addColumn('action', function ($data) {
            $edit = '<button onclick="edit_data(' . $data->id . ')" class="btn btn-sm btn-primary"><i class="flaticon flaticon-pencil"></i> Edit</button>';
            $delete = '<button onclick="delete_data(' . $data->id . ')" class="btn btn-sm btn-danger"><i class="flaticon flaticon-close"></i> Delete</button>';
            $action = '<div class="btn-group" role="group" aria-label="Basic example">' . $edit . $delete . '</div>';
            return $action;
        })->rawColumns(['action'])->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header_table = [
            'id' => 'ID',
            'name' => 'Nama Outlet',
            'phone' => 'No Telepon',
            'address' => 'Alamat',
            'action' => 'Action'
        ];
        return view('outlet.index', compact('header_table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outlet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $this->validate($request, ['name' => 'required', 'address' => 'required', 'phone' => 'required']);
        Outlet::create($data);
        return response()->json(['data' => $data], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Outlet $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        $outlet = $outlet->only(['name', 'address', 'phone']);
        return response()->json($outlet);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Outlet $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet)
    {
        $data = $request->all();
        $this->validate($request, ['name' => 'required', 'address' => 'required', 'phone' => 'required']);
        $outlet->update($data);
        return response()->json(['data' => $data], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Outlet $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet)
    {
        $outlet->delete();
    }
}
