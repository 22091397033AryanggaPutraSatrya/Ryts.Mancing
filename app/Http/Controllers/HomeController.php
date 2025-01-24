<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('produk')->inRandomOrder()->limit(5)->get();
    
        return view('index', compact('products'));
    }
    
}
