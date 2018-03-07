@extends('layouts.app',[
  'class' => 'section-box'

])

@section('content')
<div class="background_container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card bg-dark text-white text-center" style="border: 1px solid red">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
