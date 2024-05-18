@extends('layouts.profileLayout')
@section('profile')
<header
    class="border-b pl-10 pr-10 flex items-center justify-center flex-col font-poppins mb-2 h-screen relative overflow-hidden pb-20">
    <div
        class="h-72 w-1/2 p-4 flex justify-center flex-col absolute left-0 bottom-10 bg-slate-900/80 border rounded text-white pl-16 font-deca">
        <h3>Toko Rahman</h3>
        <h1 class="text-6xl font-bold">PRODUCT CATALOG</h1>
        <h2>2024-2025</h2>
    </div>
    <div class="w-full h-full overflow-hidden rounded-md shadow-2xl">
        <img class="w-full h-full " src="https://source.unsplash.com/600x600?artist" alt="">
        <button class="absolute top-4 right-14 text-black/50 hover:text-black transition-colors duration-300">
            <i class="fa-solid fa-camera-retro fa-2xl"></i>
        </button>
    </div>
</header>
<p class="text-center mb-10 p-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus eveniet
    delectus excepturi ipsum officia dolorum sed, earum incidunt dolore quibusdam? Officiis, tempore libero doloremque
    quas voluptatibus accusamus nemo ipsum fuga.</p>
<button
    class="bg-green-600 p-4 w-40 rounded fixed bottom-2 right-2 font-semibold hover:bg-green-700 text-white font-deca z-20">Add
    Product</button>
<main class="flex flex-wrap justify-center gap-4 w-full h-full mt-5 font-poppins">
    <div class="shadow-md p-2 rounded-t overflow-hidden w-64 h-72 flex justify-center flex-col items-center relative">
        <button
            class="absolute top-2 right-2 bg-red-700 rounded p-2 text-white hover:bg-red-500 transition-colors duration-300">
            <i class="fa-solid fa-trash-can"></i>
        </button>
        <div class="h-3/4 w-3/4 flex justify-center items-center overflow-hidden rounded-full">
            <picture>
                <img class="h-full w-full" src="https://source.unsplash.com/600x600?food" alt="">
            </picture>
        </div>
        <div class="p-2 font-deca">
            <h1 class="font-black text-center">FOOD</h1>
            <p>Rp 1.000.000</p>
        </div>
        <div class="w-full text-right">
            <button class="font-deca bg-green-800 text-sm p-2 w-40 rounded text-white font-semibold">
                Change
            </button>
        </div>
    </div>
    <div class="shadow-md p-2 rounded-t overflow-hidden w-64 h-72 flex justify-center flex-col items-center relative">
        <button
            class="absolute top-2 right-2 bg-red-700 rounded p-2 text-white hover:bg-red-500 transition-colors duration-300">
            <i class="fa-solid fa-trash-can"></i>
        </button>
        <div class="h-3/4 w-3/4 flex justify-center items-center overflow-hidden rounded-full">
            <picture>
                <img class="h-full w-full" src="https://source.unsplash.com/600x600?food" alt="">
            </picture>
        </div>
        <div class="p-2 font-deca">
            <h1 class="font-black text-center">FOOD</h1>
            <p>Rp 1.000.000</p>
        </div>
        <div class="w-full text-right">
            <button class="font-deca bg-green-800 text-sm p-2 w-40 rounded text-white font-semibold">
                Change
            </button>
        </div>
    </div>
    <div class="shadow-md p-2 rounded-t overflow-hidden w-64 h-72 flex justify-center flex-col items-center relative">
        <button
            class="absolute top-2 right-2 bg-red-700 rounded p-2 text-white hover:bg-red-500 transition-colors duration-300">
            <i class="fa-solid fa-trash-can"></i>
        </button>
        <div class="h-3/4 w-3/4 flex justify-center items-center overflow-hidden rounded-full">
            <picture>
                <img class="h-full w-full" src="https://source.unsplash.com/600x600?car" alt="">
            </picture>
        </div>
        <div class="p-2 font-deca">
            <h1 class="font-black text-center">CAR</h1>
            <p>Rp 1.000.000</p>
        </div>
        <div class="w-full text-right">
            <button class="font-deca bg-green-800 text-sm p-2 w-40 rounded text-white font-semibold">
                Change
            </button>
        </div>
    </div>
</main>
@endsection