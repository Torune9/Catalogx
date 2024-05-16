<x-layouts.authLayout>
    @if (session('success-info') || session('failed-info'))
    <small
        class="{{ session('failed-info') ? 'bg-red-300 text-red-600' : 'bg-green-200 text-green-600' }}  p-2 rounded ">
        {{ session('success-info') ?? session('failed-info') }}
    </small>
    @endif

    <h1 class="text-2xl font-semibold">Sign Up</h1>
    <form action="/auth/register" method="POST"
        class="flex flex-col items-center p-10 gap-y-2 border rounded font-cabin shadow-md">
        @csrf
        <div class="flex flex-col">
            <label for="username">Username</label>
            <input type="text" name="username" id="username"
                class="w-72 h-10 border outline-none hover:border-black transition-colors duration-300 focus:border-blue-800 rounded p-4 text-sm font-normal">
            <div class="w-4/5 min-h-4">
                @error('username')
                <small class="text-red-600">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>
        <div class="flex flex-col">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                class="w-72 h-10 border outline-none hover:border-black transition-colors duration-300 focus:border-blue-800 rounded p-4 text-sm font-normal">
            <div class="w-4/5 min-h-4">
                @error('email')
                <small class="text-red-600">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>
        <div class="flex flex-col">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"
                class="w-72 h-10 border outline-none hover:border-black transition-colors duration-300 focus:border-blue-800 rounded p-4 text-sm">
            <div class="w-72 min-h-4">
                @error('password')
                <small class="text-red-600">
                    {{ $message }}
                </small>
                @enderror
            </div>
        </div>
        <div class="w-full text-right">
            <button
                class="bg-blue-600 w-40 p-2 rounded text-white font-semibold hover:bg-blue-500 transition-all duration-300">
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