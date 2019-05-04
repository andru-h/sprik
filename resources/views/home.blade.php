@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="w-full flex flex-col items-center mt-8">
            <p class="text-2xl">Welcome to {{config('app.name')}}</p>
            <p class="text-base mt-4">Please choose an option from the menu to start.</p>
        </div>

    </div>
@endsection
