@extends('layouts.authLayout')
@section('auth')
@if (session('success-info') || session('failed-info'))
<small class="{{ session('failed-info') ? 'bg-red-300 text-red-600' : 'bg-green-200 text-green-600' }}  p-2 rounded ">
    {{ session('failed-info') ?? session('success-info') }}
</small>
@endif
<h1 class="text-2xl font-semibold">Login Form</h1>
<form action="/auth/login" method="POST"
    class="flex flex-col items-center p-6 gap-y-2 border rounded font-cabin shadow-lg">
    @csrf
    <div class="flex flex-col">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
            class="w-72 h-10 border focus:border-blue-800 hover:border-black transition-colors duration-300  outline-none rounded p-4 text-sm font-normal">
        <div class="h-4 w-full">
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
            class="w-72 h-10 border focus:border-blue-800 hover:border-black transition-colors duration-300  outline-none rounded p-4 text-sm">
        <div class="h-4 w-full">
            @error('password')
            <small class="text-red-600">
                {{ $message }}
            </small>
            @enderror
        </div>
    </div>
    <div class="w-full text-right">
        <button
            class="bg-green-600 w-40 p-2 rounded text-white font-semibold hover:bg-green-500 transition-all duration-300">
            Login
        </button>
    </div>
    <div>
        <small>
            Do'nt have an account?
            <span>
                <a href="/users/register" class="underline">
                    sign up
                </a>
            </span>
        </small>
    </div>
</form>
@endsection