@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">{{-- Row One --}}
        <div class="box square clear">
            @if (Route::has('login'))
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <div class="row">
                        <div class="mini-box mini-square margin-right shake-slow oneA glow">
                            <div class="mini-center">
                                <a href="{{ url('/login') }}">
                                    <p class="v-center">Login</p>
                                </a>
                            </div>
                        </div>
                        <div class="mini-box mini-square shake-slow oneB glow">
                            <div class="mini-center">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mini-box mini-square margin-right margin-top shake-slow oneC glow">
                            <div class="mini-center">
                                
                            </div>
                        </div>
                        <div class="mini-box mini-square margin-top shake-slow oneD glow">
                            <div class="mini-center">
                                <a href="{{ url('/register') }}">
                                    <p class="v-center">Register</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
            
        </div>
        <div class="box ex-large-rectangle two glow">
            <p class="v-center">Mr. Vogel's Classroom Website</p>
        </div>
    </div>

    <div class="loginForm">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label loginText">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control formMargin" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label loginText">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control formMargin" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </div>
        </form>
    </div>
    

</div>
@endsection
