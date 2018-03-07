@extends('layouts.app',[
  'class' => 'footer_normal'
])

@section('content')
<div class="container"  style="margin-bottom: 280px; margin-top: 70px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: 1px solid white;">
                <div class="card-header" style="background-color: #141414; color: white;">Login</div>

                <div class="card-body" style="background-color: #141414;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right text-white">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="bg-dark form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-white">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="bg-dark form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label class="text-white">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary text-white" style="background-color: black; border: 1px solid red;">
                                    Login
                                </button>

                                <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
