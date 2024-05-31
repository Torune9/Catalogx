<nav class="border-r fixed w-64 h-screen flex flex-col justify-between font-poppins bg-blue-900">
    <ul class="flex flex-col font-semibold h-1/2 justify-center p-8 gap-5">
        <li
            class="hover:bg-black/50 transition-colors duration-300 p-2 rounded text-white cursor-pointer {{ request()->routeIs('users.profile') ? 'bg-black/30' : 'bg-transparent' }}">
            <a href="/users/profile/{{ session('auth-user') }}" class="inline-block w-full">
                <span>
                    <i class="fa-solid fa-house-user"></i>
                </span>&nbsp;Profile
            </a>
        </li>
        <li
            class="hover:bg-black/50 transition-colors duration-300 p-2 rounded text-white cursor-pointer {{ request()->routeIs('users.catalogs') ? 'bg-black/30' : 'bg-transparent' }}">
            <a href="{{ route('users.catalogs') }}" class=" inline-block w-full">
                <span>
                    <i class="fa-solid fa-square-poll-horizontal"></i>
                </span>&nbsp;Catalogs
            </a>
        </li>
        <li class="hover:bg-black/50 transition-colors duration-300 p-2 rounded text-white cursor-pointer">
            <a href="{{ route('stores.shops') }}" class=" inline-block w-full">
                <span>
                    <i class="fa-solid fa-store"></i>
                </span>&nbsp;Stores
            </a>
        </li>
    </ul>
    <button class="bg-slate-950 text-sm text-white font-semibold font-poppins p-2 hover:bg-slate-950/50 transition-color duration-300">
        <a href="">
            <span>
                <i class="fa-solid fa-outdent"></i>
            </span>Logout
        </a>
    </button>
</nav>