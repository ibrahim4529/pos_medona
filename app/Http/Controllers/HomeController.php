<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;
use App\Outlet;
use App\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_data = [
            'pegawai' => User::count(),
            'category' => Category::count(),
            'product' => Product::count(),
            'outlet' => Outlet::count()
        ];
        return view('home', compact('jumlah_data'));
    }
}
