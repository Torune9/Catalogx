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
           {{ $store->description }}
        </h3>
    </div>
    <div class="absolute w-full">
        <div class="absolute top-60 left-28 flex flex-row gap-2 justify-center items-center">
            <div class="w-60 h-60 overflow-hidden flex justify-center items-center rounded border-4">
                <img class="h-full w-full" src="{{ asset('storage/img/uploads/profile/'.$store->image) }}" alt="">
            </div>
            <h1 class="w-96 text-4xl font-bold">
                {{ $store->name }}
            </h1>
        </div>
    </div>

    <div class="h-20 w-full bg-gray-50 rounded-b-md">
    </div>
   </div>
   {{-- Catalog user lists --}}
   <div class="flex flex-wrap justify-center gap-4 w-full h-full mt-40 font-poppins border-t p-2">
    @foreach ($products as $catalog)
    <div class="shadow-md p-2 rounded-t overflow-hidden w-64 h-78 flex justify-center flex-col items-center relative">
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
            <p class="text-sm">
                Harga : Rp {{ number_format($catalog->price, 0, ',', '.') }}
            </p>
            <p class="text-sm">Stock : {{ $catalog->stock }}</p>
        </div>
        <div class="w-full text-right">
            <a href="">
                <button class="font-deca bg-green-800 text-sm p-2 w-40 rounded text-white font-semibold">
                    order
                </button>
            </a>
        </div>
    </div>
    @endforeach
</div>
</main>
@endsection