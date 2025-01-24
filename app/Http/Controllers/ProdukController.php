<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function show($id)
    {
        $product = DB::table('produk')->where('id', $id)->first();

        if (!$product) {
            abort(404);
        }

        return view('produk.show', compact('product'));
    }
 
    public function index(Request $request)
    {
        // Ambil kategori unik dan urutkan
        $categories = DB::table('produk')->distinct()->orderBy('kategori', 'asc')->pluck('kategori');

        // Ambil data dari permintaan
        $selectedCategory = $request->input('category');
        $searchQuery = $request->input('search');

        // Query produk dengan filter kategori dan pencarian
        $products = DB::table('produk')
            ->when($selectedCategory, function ($query, $selectedCategory) {
                return $query->where('kategori', $selectedCategory);
            })
            ->when($searchQuery, function ($query, $searchQuery) {
                return $query->where('nama_produk', 'like', '%' . $searchQuery . '%');
            })
            ->orderBy('nama_produk', 'asc')
            ->get();

        // Kembalikan data ke view
        return view('produk.index', compact('products', 'categories', 'selectedCategory'));
    }

    
}
