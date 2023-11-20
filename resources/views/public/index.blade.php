@extends('layouts.public.app')

@section('contenido')
<div class="flex justify-center items-center">
    <div class="m-10 p-10 bg-gray-800 text-white font-semibold rounded-lg shadow-md w-[38%]">
        <div class="mt-5 p-5">
            <div class="w-[20%] pb-6 mx-auto">
                <img src=" {{ asset('img/logo-cecep-footer.png') }}" alt="Logo cecep">
            </div>
            <p class="text-3xl">
                Fundación Centro Colombiano de Estudios Profesionales
            </p>
        </div>

        <div class="mt-5 ml-5">
            <p>
                Realize for:
            </p>
        </div>

        <div class="ml-5 pb-5">
            <p>
                Juan Esteban Gonzalez 
            </p>
            <p>
                Programacion WEB / Profesor ROMO
            </p>
        </div>
        <div class="ml-5">
            <p>
                Grupo: S5AN proximo a S6AN
            </p>
        </div>
        <p class="text-center mt-5">Ganoso de ya acabar el semestre</p>
    </div>
</div>
@endsection