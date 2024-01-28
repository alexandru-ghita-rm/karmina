@extends('layouts.app')
@section('content')
    <div class="w-full m-auto sm:w-142 bg-red-500 text-white text-center p-5">
        <h1 class="text-2xl uppercase">Cursuri de smecherie</h1> 
    </div>
    <div class="w-full md:w-10/12 mx-auto mt-5">
    <h2 class="text-lg font-semibold uppercase">Cursuri piele handmade</h2>
        <livewire:partials.course-card-grid />
    </div>
@endsection