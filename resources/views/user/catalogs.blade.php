@extends('layouts.profileLayout')
@section('profile')
@if (session('isNullProd'))
<header
    class="border-b pl-10 pr-10 flex items-center justify-center flex-col font-poppins mb-2 h-screen relative overflow-hidden pb-20">
    <div
        class="h-72 w-1/2 p-4 flex justify-center flex-col absolute left-0 bottom-10 bg-slate-900/80 border rounded text-white pl-16 font-deca">
        <h3>Toko Rahman</h3>
        <h1 class="text-6xl font-bold">PRODUCT CATALOG</h1>
        <h2>2024-2025</h2>
    </div>
    <div class="w-full h-full overflow-hidden rounded-md shadow-2xl">
        <img class="w-full h-full object-cover " src="https://source.unsplash.com/600x600?artist" alt="">
        <button class="absolute top-4 right-14 text-black/50 hover:text-black transition-colors duration-300">
            <i class="fa-solid fa-camera-retro fa-2xl"></i>
        </button>
    </div>
</header>
<p class="text-center mb-10 p-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus eveniet
    delectus excepturi ipsum officia dolorum sed, earum incidunt dolore quibusdam? Officiis, tempore libero doloremque
    quas voluptatibus accusamus nemo ipsum fuga.
</p>
@if ($errors->any())
<div class="flex items-center p-4 mb-10 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
    role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="currentColor" viewBox="0 0 20 20">
        <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Failed to add product!</span> <a href="{{ route('product.updateCatalog') }}">
            update
        </a> a few things up and try submitting again.
    </div>
</div>
@endif
<main class="flex flex-wrap justify-center gap-4 w-full h-full mt-5 font-poppins">
    @foreach ($products as $catalog)
    <div class="shadow-md p-2 rounded-t overflow-hidden w-64 h-78 flex justify-center flex-col items-center relative">
        <x-modal.popup-modal></x-modal.popup-modal>
        <div class="h-40 w-40 flex justify-center items-center overflow-hidden rounded-full">
            <picture class="h-full w-full">

                @if(filter_var($catalog->image, FILTER_VALIDATE_URL))
                <img class="h-full w-full object-cover" src="{{ $catalog->image }}" alt="">

                @elseif($catalog->image)
                <img class="h-full w-full object-cover" src="{{ asset('storage/img/uploads/'.$catalog->image) }}"
                    alt="">
                @endif
            </picture>
        </div>
        <div class="p-2 w-full font-poppins">
            <h1 class="font-black text-center">{{ $catalog->name }}</h1>
            <p class="text-sm">Harga : Rp {{ $catalog->price }}</p>
            <p class="text-sm">Stock : {{ $catalog->stock }}</p>
        </div>
        <div class="w-full text-right">
            <button class="font-deca bg-green-800 text-sm p-2 w-40 rounded text-white font-semibold">
                <a href="{{ route('product.updateCatalog',['id' => $catalog->id]) }}">
                    update
                </a>
            </button>
        </div>
    </div>
    @endforeach
</main>
<x-modal.catalog-modal />
@else
<div class="h-screen w-full flex flex-col justify-center items-center gap-4 font-poppins">
    <h1 class="text-3xl font-bold text-black/20">
        Don't have a shop yet?
    </h1>

    <a href="{{ route('stores.stores') }}">
        <button class="bg-green-500 rounded-md p-4 w-32 text-white hover:bg-green-400 transition-colors duration-300">
            <i class="fa-regular fa-square-plus fa-2xl"></i>
        </button>
    </a>
</div>
@endif
@endsection