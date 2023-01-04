@extends('layout.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center fw-bold text-danger">Registration Form</h1>

            <form action="/register" method="post">
                @csrf
              <img class=" img-fluid rounded-top" src="https://source.unsplash.com/800x500/?register" alt="" >
          
              <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Your Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              

              <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required ">
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            
              <button class="w-100 btn btn-lg btn-danger mt-3" " type="submit">Register</button>
              <small class="d-block text-center mt-3 pb-5">Already registered? <a href="/login">Login Now!</a></small>
            </form>
          </main>
    </div>
</div>



@endsection