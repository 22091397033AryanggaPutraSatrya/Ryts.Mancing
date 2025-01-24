@extends('layouts.app')

@section('content')
    @include('header')

    <section class="bg-[#D0EFF2] py-16">
        <div class="container mx-auto">
            <div class="p-8 rounded-lg max-w-5xl mx-auto">
                <div class="flex justify-center mt-4">
                    <img src="{{ asset($product->gambar) }}" alt="{{ $product->nama_produk }}" class="w-3/4 object-cover rounded-lg mb-6">
                </div>

                <h1 class="text-3xl font-semibold text-[#012340] mb-4">{{ $product->nama_produk }}</h1>
                <p class="text-[#03588C] font-semibold mb-4">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                <p class="text-gray-600 mb-6 text-justify">{{ $product->deskripsi }}</p>

                <!-- Tombol Share Produk -->
                <div class="flex justify-between mb-6">
                    <a href="https://wa.me/6289612010482?text={{ urlencode('Halo, saya tertarik dengan produk ' . $product->nama_produk . ' dengan harga Rp ' . number_format($product->harga, 0, ',', '.') . '. Apakah masih tersedia?') }}" target="_blank" class="bg-[#05C7F2] text-[#012340] px-6 py-3 rounded-lg hover:bg-[#D0EFF2] transition">Hubungi Penjual</a>
                    <a href="https://wa.me/?text={{ urlencode('Lihat produk ini: ' . $product->nama_produk . ' di ' . request()->fullUrl()) }}" target="_blank" class="text-[#012340] text-2xl px-6 "><i class="fa-solid fa-share-nodes"></i></a>
                </div>

            </div>
        </div>
    </section>

    @include('footer')
@endsection
