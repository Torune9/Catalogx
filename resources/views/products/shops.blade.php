@extends('layouts.mainLayout')
@section('main')
<main class="flex flex-wrap justify-center gap-4 w-full h-full mt-20 font-poppins">
    <div class="flex flex-col w-full border-b p-2">
        <h1 class="text-center text-5xl font-black font-deca">STORES</h1>
        <form class="relative flex flex-row items-center group font-deca">
            <label for="search" class="absolute top-2 left-2 "><i class="fa-solid fa-magnifying-glass"></i></label>
            <input type="text" name="search" id="search"
                class="border group-hover:border-black transition-colors duration-300 border-r-0 p-2 rounded-l outline-none pl-8 text-sm w-96 focus:border-red-600">
            <button
                class="bg-red-700 p-2 rounded-r text-sm text-white border border-l-0  group-hover:border-black transition-colors duration-300 hover:bg-red-500">search</button>
        </form>
    </div>
    <div class="flex flex-col shadow-md rounded-t-md overflow-hidden w-80">
        <div class="flex flex-row items-center h-52 overflow-hidden relative">
            <picture class="h-full w-full flex justify-center items-center">
                <div class="block slide">
                    <img src="{{ asset('img/car.jpg') }}" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?computer" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?sky" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?earth" alt="">
                </div>
            </picture>
            <div class="absolute min-w-full flex justify-between text-white p-2">
                <button id="prevBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&lt;</p>
                </button>
                <button id="nextBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&gt;</p>
                </button>
            </div>
        </div>
        <div class="p-2">
            <h1 class="font-black hover:underline">
                <a href="">Bandung Elektronik</a>
            </h1>
            <small class="font-bold">Since : 1994</small>
            <br>
            <small class="hover:underline">
                <a href="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis praesentium minima consequuntur
                    architecto ullam laudantium illum ipsum alias impedit cumque....
                </a>
            </small>
        </div>
    </div>
    <div class="flex flex-col shadow-md rounded-t-md overflow-hidden w-80">
        <div class="flex flex-row items-center h-52 overflow-hidden relative">
            <picture class="h-full w-full flex justify-center items-center">
                <div class="block slide">
                    <img src="{{ asset('img/car.jpg') }}" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?computer" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?sky" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?earth" alt="">
                </div>
            </picture>
            <div class="absolute min-w-full flex justify-between text-white p-2">
                <button id="prevBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&lt;</p>
                </button>
                <button id="nextBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&gt;</p>
                </button>
            </div>
        </div>
        <div class="p-2">
            <h1 class="font-black hover:underline">
                <a href="">Bandung Elektronik</a>
            </h1>
            <small class="font-bold">Since : 1994</small>
            <br>
            <small class="hover:underline">
                <a href="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis praesentium minima consequuntur
                    architecto ullam laudantium illum ipsum alias impedit cumque....
                </a>
            </small>
        </div>
    </div>
    <div class="flex flex-col shadow-md rounded-t-md overflow-hidden w-80">
        <div class="flex flex-row items-center h-52 overflow-hidden relative">
            <picture class="h-full w-full flex justify-center items-center">
                <div class="block slide">
                    <img src="{{ asset('img/car.jpg') }}" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?computer" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?sky" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?earth" alt="">
                </div>
            </picture>
            <div class="absolute min-w-full flex justify-between text-white p-2">
                <button id="prevBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&lt;</p>
                </button>
                <button id="nextBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&gt;</p>
                </button>
            </div>
        </div>
        <div class="p-2">
            <h1 class="font-black hover:underline">
                <a href="">Bandung Elektronik</a>
            </h1>
            <small class="font-bold">Since : 1994</small>
            <br>
            <small class="hover:underline">
                <a href="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis praesentium minima consequuntur
                    architecto ullam laudantium illum ipsum alias impedit cumque....
                </a>
            </small>
        </div>
    </div>
    <div class="flex flex-col shadow-md rounded-t-md overflow-hidden w-80">
        <div class="flex flex-row items-center h-52 overflow-hidden relative">
            <picture class="h-full w-full flex justify-center items-center">
                <div class="block slide">
                    <img src="{{ asset('img/car.jpg') }}" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?computer" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?sky" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?earth" alt="">
                </div>
            </picture>
            <div class="absolute min-w-full flex justify-between text-white p-2">
                <button id="prevBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&lt;</p>
                </button>
                <button id="nextBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&gt;</p>
                </button>
            </div>
        </div>
        <div class="p-2">
            <h1 class="font-black hover:underline">
                <a href="">Bandung Elektronik</a>
            </h1>
            <small class="font-bold">Since : 1994</small>
            <br>
            <small class="hover:underline">
                <a href="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis praesentium minima consequuntur
                    architecto ullam laudantium illum ipsum alias impedit cumque....
                </a>
            </small>
        </div>
    </div>
    <div class="flex flex-col shadow-md rounded-t-md overflow-hidden w-80">
        <div class="flex flex-row items-center h-52 overflow-hidden relative">
            <picture class="h-full w-full flex justify-center items-center">
                <div class="block slide">
                    <img src="{{ asset('img/car.jpg') }}" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?computer" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?sky" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?earth" alt="">
                </div>
            </picture>
            <div class="absolute min-w-full flex justify-between text-white p-2">
                <button id="prevBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&lt;</p>
                </button>
                <button id="nextBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&gt;</p>
                </button>
            </div>
        </div>
        <div class="p-2">
            <h1 class="font-black hover:underline">
                <a href="">Bandung Elektronik</a>
            </h1>
            <small class="font-bold">Since : 1994</small>
            <br>
            <small class="hover:underline">
                <a href="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis praesentium minima consequuntur
                    architecto ullam laudantium illum ipsum alias impedit cumque....
                </a>
            </small>
        </div>
    </div>
    <div class="flex flex-col shadow-md rounded-t-md overflow-hidden w-80">
        <div class="flex flex-row items-center h-52 overflow-hidden relative">
            <picture class="h-full w-full flex justify-center items-center">
                <div class="block slide">
                    <img src="{{ asset('img/car.jpg') }}" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?computer" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?sky" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?earth" alt="">
                </div>
            </picture>
            <div class="absolute min-w-full flex justify-between text-white p-2">
                <button id="prevBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&lt;</p>
                </button>
                <button id="nextBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&gt;</p>
                </button>
            </div>
        </div>
        <div class="p-2">
            <h1 class="font-black hover:underline">
                <a href="">Bandung Elektronik</a>
            </h1>
            <small class="font-bold">Since : 1994</small>
            <br>
            <small class="hover:underline">
                <a href="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis praesentium minima consequuntur
                    architecto ullam laudantium illum ipsum alias impedit cumque....
                </a>
            </small>
        </div>
    </div>
    <div class="flex flex-col shadow-md rounded-t-md overflow-hidden w-80">
        <div class="flex flex-row items-center h-52 overflow-hidden relative">
            <picture class="h-full w-full flex justify-center items-center">
                <div class="block slide">
                    <img src="{{ asset('img/car.jpg') }}" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?computer" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?sky" alt="">
                </div>
                <div class="hidden slide">
                    <img src="https://source.unsplash.com/400x600?earth" alt="">
                </div>
            </picture>
            <div class="absolute min-w-full flex justify-between text-white p-2">
                <button id="prevBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&lt;</p>
                </button>
                <button id="nextBtn"
                    class="text-xl font-black rounded-full h-8 w-8 bg-black/50 border border-black hover:bg-white/50 transition-colors duration-300 hover:border-none hover:text-black">
                    <p>&gt;</p>
                </button>
            </div>
        </div>
        <div class="p-2">
            <h1 class="font-black hover:underline">
                <a href="">Bandung Elektronik</a>
            </h1>
            <small class="font-bold">Since : 1994</small>
            <br>
            <small class="hover:underline">
                <a href="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis praesentium minima consequuntur
                    architecto ullam laudantium illum ipsum alias impedit cumque....
                </a>
            </small>
        </div>
    </div>
</main>
@endsection