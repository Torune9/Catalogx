<nav class="border-r fixed w-64 h-screen flex flex-col justify-between font-poppins bg-blue-900">
    <ul class="flex flex-col font-semibold h-1/2 justify-center p-8 gap-5">
        <l1 class="border hover:bg-black/50 transition-colors duration-300 p-2 rounded text-white cursor-pointer {{ request()->is('profile/username') ? 'bg-black/30' : 'bg-transparent' }}">
            <a href="/users/profile/username" class=" inline-block w-full">
                Profile
            </a>
        </l1>
        <l1 class="border hover:bg-black/50 transition-colors duration-300 p-2 rounded text-white cursor-pointer {{ request()->is('users/catalogs') ? 'bg-black/30' : 'bg-transparent' }}">
            <a href="/users/profile/catalogs" class=" inline-block w-full">
                Catalogs
            </a>
        </l1>
        <l1 class="border hover:bg-black/50 transition-colors duration-300 p-2 rounded text-white cursor-pointer">
            <a href="/stores" class=" inline-block w-full">
                Stores
            </a>
        </l1>
    </ul>
</nav>