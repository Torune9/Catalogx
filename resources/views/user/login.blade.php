@extends('mainLayout.auth')

@section('form')
<h1 class="text-2xl font-semibold">Login Form</h1>
<form action="#" class="flex flex-col items-center p-6 gap-y-6 border rounded font-cabin shadow-lg">
    @csrf
    <div class="flex flex-col">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="w-72 h-10 border outline-none rounded p-4 text-sm font-normal">
    </div>
    <div class="flex flex-col">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="w-72 h-10 border outline-none rounded p-4 text-sm">
    </div>
    <div class="w-full text-right">
        <button class="bg-green-600 w-40 p-2 rounded text-white font-semibold hover:bg-green-500 transition-all duration-300">
            Login
        </button>
    </div>
    <div>
        <small>
            Do'nt have an account?
            <span>
                <a href="/register" class="underline">
                    sign up
                </a>
            </span>
        </small>
    </div>
</form>
@endsection