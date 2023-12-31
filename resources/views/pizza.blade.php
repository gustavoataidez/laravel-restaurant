@extends('layouts/layout')

@section('container')

<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

    <div class="max-w-7xl mx-auto p-6 lg:p-8 mt-6 text-xl font-semibold text-gray-900 dark:text-white">
        <h1>Test connexion</h1>
        
        @foreach($pizza as $pizza)
        <p>A {{ $pizza['name'] }} - {{ $pizza['flavor'] }} <br>Ammount: {{ $pizza['price'] }}</p>
        @endforeach
    </div>
</div>
@endsection