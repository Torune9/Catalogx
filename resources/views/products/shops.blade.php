@extends('layouts.mainLayout')
@section('main')
<main class="mt-24 w-full h-full flex flex-wrap gap-2 items-center justify-center font-poppins">
    <div class="flex flex-col w-full border-b p-2 mb-5">
        <h1 class="text-center text-5xl font-black font-deca text-green-900">
            STORES
        </h1>
        <form class="relative flex flex-row items-center group font-deca">
            <label for="search" class="absolute top-2 left-2 "><i class="fa-solid fa-magnifying-glass"></i></label>
            <input type="text" name="search" id="search"
                class="border group-hover:border-black transition-colors duration-300 border-r-0 p-2 rounded-l outline-none pl-8 text-sm w-96 focus:border-red-600">
            <button
                class="bg-red-700 p-2 rounded-r text-sm text-white border border-l-0  group-hover:border-black transition-colors duration-300 hover:bg-red-500">search</button>
        </form>
    </div>
    <form method="GET" action="{{ route('stores.shops') }}" class="w-full pb-8 border-b flex flex-row items-center" id="form" data-url="{{ url('stores/shops') }}">
        <div class="flex flex-row items-center w-full gap-x-1">
            <input type="radio" value="all" name="category" class="cursor-pointer" id="allCategories">
            <label for="category">
                All Categories
            </label>
        </div>
        <div class="w-full flex flex-row justify-evenly">
            @foreach($categories as $category)
            <div>
                <input type="radio" name="category" value="{{ $category->id }}">
                <label for="category">{{ $category->name }}</label>
            </div>
            @endforeach

        </div>
    </form>
    @foreach ( $stores as $store )
    <div id="default-carousel" class="relative w-96 shadow-lg rounded overflow-hidden p-4" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded">
            @foreach ($store->catalogs as $catalog)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/img/uploads/'. $catalog->image) }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            @endforeach
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 w-full flex gap-x-1 justify-center top-48">
            @foreach ($store->catalogs as $catalog->image)
            <button type="button" class="w-3 h-3 rounded-full" data-carousel-slide-to="1"></button>
            @endforeach
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-28 start-0 z-30 flex items-center justify-center px-6 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-28 end-0 z-30 flex items-center justify-center px-6 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
        {{-- Info Toko --}}
        <div class="p-2 flex flex-col gap-2">
            <h1 class="font-bold text-2xl hover:underline font-deca">
                <a href="{{ route('users.details',['id'=>$store->id]) }}">
                    {{ $store->name }}
                </a>
            </h1>
            <h3 class="text-[11px]">Since : {{ (new DateTime($store->from_date))->format('Y') }}</h3>
            <p class="text-justify text-sm hover:underline">
                <a href="{{ route('users.details',['id'=>$store->id]) }}">
                    {{ Str::limit($store->description,100)}}
                </a>
            </p>
        </div>
    </div>
    @endforeach
    @if ($notFound)
    <p>
        {{ $notFound['message'] }}
    </p>
    @endif
</main>
@endsection