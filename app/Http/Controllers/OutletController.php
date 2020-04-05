<?php

namespace App\Http\Controllers;

use App\Outlet;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OutletController extends Controller
{
    public function datatable()
    {
        $outlets = Outlet::all(['id','name', 'phone', 'address']);
        return DataTables::of($outlets)->addColumn('action', function ($data) {
            $update = '<a href="javascript:void(0)" class="btn btn-primary">' . $data->id . '</a>';
            return $update;
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
            'name' => 'Alamat Email',
            'phone' => 'Nama Lengkap',
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Outlet $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Outlet $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Outlet $outlet)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Outlet $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet)
    {
        //
    }
}
