<x-layouts.authLayout>
    <h1 class="text-2xl font-semibold">Sign Up</h1>
<form action="#" class="flex flex-col items-center p-8 gap-y-6 border rounded font-cabin shadow-md">
    @csrf
    <div class="flex flex-col">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="w-72 h-10 border outline-none rounded p-4 text-sm font-normal">
    </div>
    <div class="flex flex-col">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="w-72 h-10 border outline-none rounded p-4 text-sm font-normal">
    </div>
    <div class="flex flex-col">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="w-72 h-10 border outline-none rounded p-4 text-sm">
    </div>
    <div class="w-full text-right">
        <button class="bg-blue-600 w-40 p-2 rounded text-white font-semibold hover:bg-blue-500 transition-all duration-300">
            Register
        </button>
    </div>
    <div>
        <small>
            Already have account?
            <span>
                <a href="/" class="underline">
                    sign in
                </a>
            </span>
        </small>
    </div>
</form>
</x-layouts.authLayout>