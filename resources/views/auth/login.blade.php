@extends('layouts.login')

@section('login')
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/bg.svg">
        </div>
        <div class="login-content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <img src="img/logo.png" style="max-width: 2000px; height: auto;">
                <h2 class="title">A.P.M.F</h2>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input 
                            type="text" 
                            class="input @error('email') is-invalid @enderror" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autocomplete="email" 
                            autofocus
                        >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input 
                            type="password" 
                            class="input @error('password') is-invalid @enderror" 
                            name="password" 
                            value="{{ old('password') }}" 
                            required 
                            autocomplete="password" 
                            autofocus
                        >
                        @error('password')
                            <span class="invalid-feedback" role="alert" >
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
@endsection
