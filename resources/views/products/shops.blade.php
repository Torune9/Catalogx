<x-layouts.mainLayout>
    <h1 class="w-full text-center text-2xl font-bold font-poppins border-b p-2">Shop List</h1>
    <main class="flex flex-wrap justify-center gap-4 w-full h-full mt-5 font-poppins">
        <div class="flex flex-col shadow-md rounded-t-md overflow-hidden">
            <div class="flex flex-row items-center w-80 h-52 overflow-hidden relative">
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
                <h1 class="font-bold">
                    <a href="">Bandung Elektronik</a>
                </h1>
                <small>since : 1994</small>
            </div>
        </div>
    </main>
</x-layouts.mainLayout>