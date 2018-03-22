@extends('layouts.app',[
  'class' => 'footer_normal'
])
@section('content')


  <section>
    <div class="background_container">
      <div class="row">
        @foreach ($workouts as $workout)
        <div class="col-md-4 col- workout workout_color">
          <h2 class="zumba">{{$workout['workout']}}</h2>
            <a href="{{route('workout-show', $workout->id)}}"><img src="{{$workout->getUrlAttribute()}}" alt="" class="img-fluid"></a> 
          </div>
        @endforeach
        </div>
      </div>
    </section>
    @if (Auth::check())
      @if (Auth::user()->isAdmin())
        <div class="col-md-12 col-sm-12 mb-4 mt-5 text-center">
          <a href="{{route('workout-create')}}" class="btn btn-info" style="background-color: black; border: 1px solid red;"> Add workouts</a>
        </div>
      @endif
    @endif


    @endsection
