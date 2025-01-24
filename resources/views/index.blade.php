@extends('layouts.app')

@section('content')
    @include('header')

    <section class="relative text-white py-16 bg-fixed h-[65svh] lg:h-svh bg-center bg-cover" style="background-image: url('images/bg.jpg');">
        <div class="absolute inset-0 bg-[#012340]/15"></div>
        <div class="container mx-auto text-right top-1/4 md:top-1/3 relative px-2 z-10">
            <h1 class="text-2xl md:text-4xl font-bold mb-4 drop-shadow-sm">Selamat datang di Ryts.Mancing</h1>
            <p class="text-xl md:text-2xl mb-8 drop-shadow-sm">Menyediakan berbagai macam alat pancing berkualitas untuk kebutuhan hobi dan profesional.</p>
            <a href="{{ url('/produk') }}" class="border-2 border-[#D0EFF2] px-6 py-3 rounded-lg transition ">Lihat Produk</a>
        </div>
    </section>

    <section class="py-16">
        <div class="container md:bg-[#D0EFF2] px-16 pt-14 rounded-xl md:shadow-xl mx-auto flex flex-col lg:flex-row items-center justify-center">
            <div class="flex-none w-full lg:w-1/2 mb-8 lg:mb-0 flex justify-center">
                <img src="images/knp.webp" alt="Kenapa Memilih Kami?" class="rounded-lg w-4/5 h-auto">
            </div>

            <div class="flex-1 lg:pl-10 text-center lg:text-left">
                <h2 class="text-3xl font-bold text-[#012340] mb-6">Kenapa Memilih Kami?</h2>
                <p class="text-lg text-[#03588C] mb-4 text-justify">
                    Ryts.Mancing berdedikasi untuk memberikan pengalaman terbaik bagi para pecinta hobi memancing, baik pemula maupun profesional. Dengan koleksi alat pancing berkualitas tinggi yang dipilih secara cermat, kami memastikan setiap produk yang kami tawarkan memenuhi standar terbaik. 
                </p>
                <p class="text-lg text-[#03588C] text-justify mb-4">
                    Mulai dari reel, joran, hingga aksesoris, kami selalu mengutamakan inovasi dan kenyamanan untuk menunjang performa Anda di setiap petualangan memancing. Pilih Ryts.Mancing, dan biarkan kami menjadi bagian dari petualangan memancing Anda!
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#D0EFF2] py-16">
        <div class="container mx-auto">
            <h3 class="text-4xl font-semibold mb-6 text-center">Produk Kami</h3>
            <a href="/produk">
                <div class="overflow-x-scroll overscroll-x-none flex space-x-6 xl:justify-center no-scrollbar">
                    @foreach($products as $product)
                        <div class="flex-none w-64 rounded-lg transition">
                            <img src="{{ asset($product->gambar) }}" alt="{{ $product->nama_produk }}" class="size-full object-contain rounded-t-lg drop-shadow-l">
                        </div>
                    @endforeach
                </div>
            </a>
        </div>
    </section>


    <section class="py-9 px-4 bg-[#012340] text-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 pb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Alamat</h3>
                    <a href="https://maps.app.goo.gl/BULNAPAu3WzZFy9J9" class="text-md" target="_blank">
                        <p>Trillium Office & Residence, Shophouse No. 3, Jl. Pemuda 108 - 116, Surabaya 60271</p>
                    </a>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Navigasi Cepat</h3>
                    <ul class="space-y-2 text-md">
                        <li><a href="/" class="hover:underline">Beranda</a></li>
                        <li><a href="/produk" class="hover:underline">Produk</a></li>
                        <!-- <li><a href="/tentang" class="hover:underline">Tentang Kami</a></li>
                        <li><a href="/kontak" class="hover:underline">Kontak</a></li>
                        <li><a href="/kebijakan-privasi" class="hover:underline">Kebijakan Privasi</a></li> -->
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Jam Operasional</h3>
                    <ul class="space-y-2 text-md">
                        <li>Senin - Jumat: 09.00 - 18.00</li>
                        <li>Sabtu: 10.00 - 14.00</li>
                        <li>Minggu: Libur</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Media Sosial</h3>
                    <ul class="flex space-x-4 text-xl">
                        <li><a href="https://wa.me/6289612010482" target="_blank" class="text-[#05C7F2]"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="https://instagram.com/aryanggaps_" target="_blank" class="text-[#05C7F2]"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
                
            </div>

            <hr class="border-gray-600 mt-4">

        </div>
    </section>

    @include('footer')
@endsection
