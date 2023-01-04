@extends('layout/main')

@section('title', 'App | About')
    
@section('content')

            <h1>{{ $name }}</h1>
            <p>{{ $email }}</p>
            <img src="{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">

@endsection
        
    