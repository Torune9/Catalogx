@extends('layouts.profileLayout')
@section('profile')
<div class="flex flex-row items-center overflow-hidden rounded-2xl gap-2">
    <picture class="h-screen w-3/5">
        <div class="h-full w-full">
            <img class="h-full w-full" src="https://source.unsplash.com/400x400?sky" alt="">
        </div>
    </picture>
    <div class="w-2/5 h-screen flex flex-col justify-center relative">
        <div class="p-2">
            <h1 class="text-6xl font-deca font-black">Rahman<span class="text-blue-800 inline-block">Nurhayadi</span>
            </h1>
            <h3 class="font-sm font-poppins text-black">rahman@gmail.com</h3>
        </div>
        <p class="text-justify font-deca p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
            reiciendis et itaque adipisci aperiam, non omnis saepe sequi eveniet explicabo commodi, quasi temporibus
            atque provident numquam quis ipsam aliquam fugiat harum rem amet? Sunt quod facere est cumque tempore.
            Esse dolores recusandae pariatur doloribus nostrum aliquid mollitia at accusantium nihil.</p>
        <div class=" w-96 h-96 bg-slate-900 absolute rotate-45 -right-20 -top-36 rounded-full -z-30 p-2"></div>
        <button class="absolute bottom-4 right-4 p-2 bg-blue-800 w-40 rounded-md text-white font-poppins font-semibold">
            Edit
        </button>
    </div>
</div>
@endsection