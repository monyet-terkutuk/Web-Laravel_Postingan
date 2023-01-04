@extends('layout.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">


      {{-- pesan register berhasil --}}
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      {{-- pesan error login --}}
      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif


        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center fw-bold text-danger">Please Login</h1>

            <form method="POST" action="/login">
              @csrf
              <img class="rounded-top img-fluid" src="https://source.unsplash.com/800x500/?login" alt="" >
          
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
          
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
              <small class="d-block text-center mt-3 pb-5">Not registered? <a href="/register">Register Now!</a></small>
            </form>
          </main>
    </div>
</div>



@endsection