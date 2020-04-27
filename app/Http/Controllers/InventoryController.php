<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Outlet;

class InventoryController extends Controller
{

    public function datatable_produk_in()
    {
        $products = Inventory::where('type', 'in')->get(['id','description', 'type']);
        return DataTables::of($products)->addColumn('action', function ($data) {
            $delete = '<button onclick="delete_data(' . $data->id . ')" class="btn btn-sm btn-danger"><i class="fa fa-close"></i> Delete</button>';
            $detail = '<button onclick="show_detail('.$data->id.')" class="btn btn-sm btn-warning><i class="flaticon flaticon-close"></i>Detail</button>';
            $action = '<div class="btn-group" role="group" aria-label="Basic example">' .$detail. $delete . '</div>';
            return $action;
        })->rawColumns(['action'])->make(true);
    }
    public function datatable_produk_out()
    {
        $products = Inventory::where('type', 'out')->get(['description', 'type']);
        return DataTables::of($products)->addColumn('action', function ($data) {
            $delete = '<button onclick="delete_data(' . $data->id . ')" class="btn btn-sm btn-danger"><i class="flaticon flaticon-close"></i> Delete</button>';
            $action = '<div class="btn-group" role="group" aria-label="Basic example">' . $delete . '</div>';
            return $action;
        })->rawColumns(['action'])->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_in()
    {
        $header_table = [
            'id' => 'ID',
            'description' => 'Deskripsi',
            'type' => 'Type',
            'action' => 'Action'
        ];
        $outlets = Outlet::all()->pluck('name', 'id');
        return view('inventory.index-in', compact('header_table', 'outlets'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_out()
    {
        $header_table = [
            'id' => 'ID',
            'description' => 'Deskripsi',
        ];
        $outlets = Outlet::all()->pluck('name', 'id');
        return view('inventory.index-out', compact('header_table', 'outlets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
