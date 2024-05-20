@extends('layouts.mainLayout')
@section('main')
<main class="mt-24 w-full h-full flex flex-wrap gap-2 items-center justify-center font-poppins">
    {{-- Profile User--}}
   <div class="flex flex-col relative w-full">
    <div class="w-full h-72 bg-blue-800 p-10 rounded-t-md text-sm text-white flex justify-center flex-col">
        <h1 class="text-2xl font-bold text-blue-200">
            Description
        </h1>
        <h3>
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis velit alias assumenda obcaecati ratione, tenetur nemo magnam expedita molestiae odio ipsam cum, nulla animi ab doloribus hic sint distinctio quod! Alias laboriosam suscipit commodi soluta dolore, cum molestias nesciunt adipisci minus tempora aliquid numquam. Voluptatum illo obcaecati, sunt quia facere dolore aut, amet, repellendus sed harum corporis atque animi ipsa?
        </h3>
    </div>
    <div class="absolute w-full">
        <div class="absolute top-60 left-28 flex flex-row gap-2 justify-center items-center">
            <div class="w-60 h-60 overflow-hidden flex justify-center items-center rounded border-4">
                <img class="h-full w-full" src="https://source.unsplash.com/600x600?profile" alt="">
            </div>
            <h1 class="w-96 text-4xl font-bold">
                Food Strict
            </h1>
        </div>
    </div>

    <div class="h-20 w-full bg-gray-50 rounded-b-md">
    </div>
   </div>
   {{-- Catalog user lists --}}
   <div class="flex flex-wrap justify-center gap-4 w-full h-full mt-40 font-poppins border-t p-2">
    <div class="shadow-md p-2 rounded-t overflow-hidden w-64 h-78 flex justify-center flex-col items-center relative">
        <x-modal.popup-modal></x-modal.popup-modal>
        <div class="h-3/4 w-3/4 flex justify-center items-center overflow-hidden rounded-full">
            <picture>
                <img class="h-full w-full" src="https://source.unsplash.com/600x600?food" alt="">
            </picture>
        </div>
        <div class="p-2 font-deca w-full">
            <h1 class="font-black text-center">FOOD</h1>
            <p>Rp 1.000.000</p>
            <p>Stock:200</p>
        </div>
        <div class="w-full text-right">
            <button class="font-deca bg-green-800 text-sm p-2 w-40 rounded text-white font-semibold">
                <a href="{{ route('product.updateCatalog') }}">
                    order
                </a>
            </button>
        </div>
    </div>
</div>
</main>
@endsection