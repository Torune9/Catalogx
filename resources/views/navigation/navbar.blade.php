<nav
    class="w-full h-14  flex justify-between items-center p-4 text-white font-semibold font-deca fixed z-50 bg-white/10 backdrop-blur-sm">
    <h1 class="text-2xl font-bold text-red-800">Catalog <span class="text-red-700">X</span></h1>
    <div class="flex justify-between items-center gap-x-6 te">
        <ul class="flex justify-evenly items-center gap-x-2 text-sm text-red-700">
            <li
                class="p-2 rounded hover:bg-black/10 hover:text-white transition-colors duration-300 {{ request()->routeIs('stores.shops') ? 'bg-black/10' : 'bg-transparent' }}">
                <a href="{{ route('stores.shops') }}">
                    Stores
                </a>
            </li>
            <li data-tooltip-target="tooltip-default"
                class="cursor-pointer p-2 rounded hover:bg-black/10 hover:text-white transition-colors duration-300 {{ request()->is('profile/username') ? 'bg-black/50' : 'bg-transparent' }}">
                <a href="/users/profile/{{ session('auth-user') }}">
                    <i class="fa-solid fa-id-badge fa-xl"></i>
                </a>

                <div id="tooltip-default" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    {{ Auth::user()->name }}
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

            </li>
            <li
                class="p-2 rounded hover:bg-black/10 hover:text-white transition-colors duration-300 {{ request()->is('profile/username') ? 'bg-black/50' : 'bg-transparent' }}">
                <a href="{{ route('users.logout') }}">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>