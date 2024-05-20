@extends('layouts.profileLayout')
@section('profile')
<main class="font-poppins p-10 flex justify-center items-center flex-col border rounded">
    <h1 class="text-2xl mb-2 font-bold">Create Stores</h1>

    <form action="#" class="grid gap-2 grid-flow-row">
        @csrf
        @method('PUT')
        <div class="w-96">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Store name
            </label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Store name" required />
        </div>
        <div class="w-96">
            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Tahun
            </label>
            <input type="text" name="stock" id="stock"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="example:2020-2021" required />
        </div>
      
        <div class="w-96">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                file</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" id="file_input" name="image" type="file">
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-1/2">Submit</button>
    </form>

</main>
@endsection