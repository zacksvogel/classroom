@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
{{-- 
                        <div class="form-group{{ $errors->has('className') ? ' has-error' : '' }}">
                            <label for="className" class="col-md-4 control-label">Class</label>

                            <div class="col-md-6">
                                <input id="className" type="text" class="form-control" name="className" value="{{ old('className') }}" required>

                                @if ($errors->has('className'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('className') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        <div class="form-group{{ $errors->has('className') ? ' has-error' : '' }}">
                            <label for="className" class="col-md-4 control-label">Class</label>
                            <div class="col-md-6 text-center">
                            <select class="col-md-12 control-label form-control" id="className" name="className" value="{{ old('className') }}" required>
                                <option> </option>
                                <option>Business Management</option>
                                <option>Entrepreneurship</option>
                                <option>Accounting I</option>
                                <option>Accounting II</option>
                                <option>Video Productions</option>
                                <option>Web Design</option>
                                <option>AV Fundamentals</option>
                            </select>

                            @if ($errors->has('className'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('className') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        {{-- <div class="dropdown form-group{{ $errors->has('className') ? ' has-error' : '' }}">
                            <label for="className" class="col-md-4 control-label">Class</label>
                            <div class="col-md-6 text-center">
                                <button class="btn btn-default dropdown-toggle control-label col-md-12" type="button" id="className" name="className" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" value="{{ old('className') }}" required>
                                Select Class
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Business Management</a></li>
                                    <li><a href="#">Entrepreneurship</a></li>
                                    <li><a href="#">Accounting I</a></li>
                                    <li><a href="#">Accounting II</a></li>
                                    <li><a href="#">Video Productions</a></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">AV Fundamentals</a></li>
                                </ul>

                                @if ($errors->has('className'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('className') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div> --}}


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
