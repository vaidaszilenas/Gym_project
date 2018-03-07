@extends('layouts.app',[
  'class' => 'section-box'
])

@section('content')
<div class="background_container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="border: 1px solid white;">
                <div class="card-header" style="background-color: #141414; color: white;">Register</div>

                <div class="card-body" style="background-color: #141414;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right text-white">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="text-white text-white bg-dark form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-white">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="text-white bg-dark form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" class="text-white bg-dark form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-white">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="text-white bg-dark form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary text-white" style="background-color: black; border: 1px solid red;">
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
