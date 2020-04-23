<?php

namespace App\Http\Controllers;

use App\Outlet;
use App\Supplier;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SupplierController extends Controller
{
    public function datatable()
    {
        $suppliers = Supplier::all(['id', 'email','name', 'phone']);
        return DataTables::of($suppliers)->addColumn('action', function ($data) {
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
            'email' => 'Alamat Email',
            'name' => 'Nama Supplier',
            'phone' => 'Nomor Telepon',
            'action' => 'Action'
        ];
        $outlets = Outlet::all()->pluck('name', 'id');
        return view('supplier.index', compact('header_table', 'outlets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request, ['name' => 'required', 'phone' => 'required']);
        Supplier::create($input);
        return response()->json(['message' => 'Success'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        $supplier = $supplier->only([ 'name', 'address', 'phone', 'email', 'outlet_id']);
        return response()->json($supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
    }
}
