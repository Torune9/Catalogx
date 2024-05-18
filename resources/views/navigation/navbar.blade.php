<nav class="w-full h-14 bg-indigo-800 flex justify-between items-center p-4 text-white font-semibold font-deca fixed z-50">
    <h1 class="text-xl font-bold">Catalog <span class="text-black">X</span></h1>
    <div class="flex justify-between items-center gap-x-6 te">
        <ul class="flex justify-evenly items-center gap-x-2 w-56">
            <li
                class="p-2 rounded hover:bg-white/30 transition-colors duration-300 {{ request()->is('stores') ? 'bg-black/50' : 'bg-transparent' }}">
                <a href="/stores">
                    <i class="fa-brands fa-shopify fa-2xl"></i>
                </a>
            </li>
            <li
                class="p-2 rounded hover:bg-white/30 transition-colors duration-300 {{ request()->is('profile/username') ? 'bg-black/50' : 'bg-transparent' }}">
                <a href="/users/profile/username">Rahman</a>
            </li>
            <li
                class="p-2 rounded hover:bg-white/30 transition-colors duration-300 {{ request()->is('profile/username') ? 'bg-black/50' : 'bg-transparent' }}">
                <a href="/users/profile/username">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>