@extends('layouts.app')

@section('title', 'Laravel 12')

@push('css')
    <style>
        body{
            background-color: #0cc6e7;
        }
    </style>
@endpush

@push('css')

    <style>
        body{
            color:rgb(184, 24, 24);
        }
    </style>

@endpush

@push('css')
    <style>
        footer{
            color: #e7d10c
        }
    </style>

@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la Página Principal</h1>
        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>
            Hola mundo
        </p>
    </div>
    <div class="max-w-7x1 mx-auto px-7">
        <p>
            Hola nene
        </p>
    </div>
@endsection
