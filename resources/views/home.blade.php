@extends('layout/main')

@section('title', 'App | Home')
    
@section('content')
@if(session()->has('logoutSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('logoutSuccess') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
<h1>Hii Human</h1>

@endsection
        
     
