@extends('layout.main')

    
@section('content')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">

            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>By. <a href="/post?author={{ $post->Author->username }}" class="text-decoration-none">{{ $post->Author->name }}</a> in <a href="/post?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }} </a></p>
        
            @if ($post->image)
           
            <div style="max-height:300px; overflow:hidden;">

            <img src="{{ asset('storage/' . $post->image) }}" alt="post-image" class="img-fluid mt-3">
           
            </div>

           @else

           <img src="https://source.unsplash.com/1000x400/?{{ $post->category->name }}" alt="post-image" class="img-fluid mt-3">  
          
           @endif

            <article class="my-3 fs-6">
                {!! $post->body !!}  
            </article>
            
            <a href="/post" class="d-block mt-3"><i>back to menu</i></a>
        </div>
    </div>
</div>


@endsection
        
    
        