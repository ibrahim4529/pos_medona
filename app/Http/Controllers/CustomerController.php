<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Outlet;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CustomerController extends Controller
{
    public function datatable()
    {
        $customers = Customer::all(['id', 'email', 'name', 'address', 'phone']);
        return DataTables::of($customers)->addColumn('action', function ($data) {
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
            'name' => 'Nama Lengkap',
            'address' => 'Alamat',
            'phone' => 'Nomor Telepon',
            'action' => 'Action'
        ];
        $outlets = Outlet::all()->pluck('name', 'id');
        return view('customer.index', compact('header_table', 'outlets'));
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
        $this->validate($request, ['name'=>'required', 'email' => 'required']);
        Customer::create($input);
        return response()->json(['message'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $customer = $customer->only(['name', 'email', 'phone',
            'address', 'outlet_id']);
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $input = $request->all();
        $customer->update($input);
        return response()->json(['data' => $customer], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
