@extends('layouts.profileLayout')
@section('profile')
<main class="font-poppins p-10 flex justify-center items-center flex-col border rounded">
    <h1 class="text-2xl mb-2 font-bold">Create Stores</h1>

    <form action="{{ route('stores.addStore') }}" method="POST" class="grid gap-2 grid-flow-row" enctype="multipart/form-data">
        @csrf
        <div class="w-96">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Store name
            </label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Store name"/>
                @error('name')
                    <small class="text-red-600">
                        {{ $message }}
                    </small>
                @enderror
        </div>
        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id ?? null}}">
        <div class="w-96 class flex flex-col gap-y-2">
           <div>
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                From date
            </label>
            <input type="date" name="fromDate" id="fromDate"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="example:2020-2021"/>
                @error('fromDate')
                <small class="text-red-600">
                    {{ $message }}
                </small>
            @enderror
           </div>
           <div>
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                To date
            </label>
            <input type="date" name="toDate" id="toDate"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="example:2020-2021"/>
                @error('toDate')
                <small class="text-red-600">
                    {{ $message }}
                </small>
            @enderror
           </div>
        </div>
      
        <div class="w-96">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                file</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" id="file_input" name="image" type="file">
                @error('image')
                <small class="text-red-600">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="w-96">
            <label for="description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                Description</label>
            <textarea id="description" name="description" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write product description here"></textarea>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-1/2">Submit</button>
    </form>

</main>
@endsection