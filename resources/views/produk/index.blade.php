@extends('layouts.app')

@section('content')
    @include('header')

    <section class="bg-[#D0EFF2] py-16">
        <div class="container mx-auto mt-20">
        <h3 class="text-3xl font-semibold text-left ml-2 text-[#012340]">Produk Kami</h3>
        <div class="container mx-auto mt-5">
            <div class="flex justify-between items-center mb-6">
                <form action="{{ route('produk.index') }}" method="GET" class="flex items-center">
                    <select name="category" class="bg-[#D0EFF2] border p-2 rounded-lg" onchange="this.form.submit()">
                        <option value="">Semua Kategori</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ $category == $selectedCategory ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                </form>
                <form action="{{ route('produk.index') }}" method="GET" class="flex justify-end">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari Produk..." class="bg-[#D0EFF2] border-[#012340] border px-2 rounded-lg w-1/2 md:w-full"/>
                    <button type="submit" class="mx-2  tex-2xl"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>

            <!-- Produk -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 m-3">
                @foreach($products as $product)
                    <div class="p-4 rounded-lg hover:shadow-xl transition flex flex-col shadow-md">
                        <img src="{{ asset($product->gambar) }}" alt="{{ $product->nama_produk }}" class="w-full h-52 object-contain rounded-t-lg mb-4">
                        <h4 class="text-xl font-semibold text-[#012340]">{{ $product->nama_produk }}</h4>
                        <p class="text-sm text-gray-600 mb-4">{{ Str::limit($product->deskripsi, 100) }}</p>
                        <a href="{{ url('/produk/' . $product->id) }}" class="mt-auto text-[#03588C] font-semibold hover:drop-shadow-md">
                            <div class="flex justify-between text-lg">
                                <p>Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                                <p class="fa-solid fa-info"></p>
                            </div>
                        </a>
                        
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('footer')
@endsection
