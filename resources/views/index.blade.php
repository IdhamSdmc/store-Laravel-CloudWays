@extends('layouts.app')

@section('content')
<div 
    class="grid grid-cols-1 m-auto w-full h-screen bg-dunes bg-cover bg-center"
    style="background-image: url('https://cdn.pixabay.com/photo/2020/12/18/16/56/laptop-5842509__480.jpg')">
    <div class="flex text-gray-100">
        <div class="m-auto pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-3xl sm:text-5xl uppercase font-normal text-shadow-md">
                Tienda Tech Productos
            </h1>
            
            <p class="pb-10 font-thin pt-6 font-medium">
                Obten los mejores dispositivos al mejor precio !!!
            </p>

            <a  
                href="/shop"
                class="px-8 py-4 text-l uppercase text-white font-bold bg-blue-600 rounded-full w-full">
                Comprar ahora
            </a>
        </div>
    </div>
</div>
@endsection