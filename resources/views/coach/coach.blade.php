@extends('layouts.app',[
  'class' => 'footer_normal'
])
@section('content')
  <section class="background_container">
    <div class="row">
      <div class=" section__coach col-md-12">


        <div class="row">
          @foreach ($coaches as $coach)
            <div class="coach1 col-md-3 col-sm-7 col-12">

              <img src="{{$coach->getUrlAttribute()}}" class="img-border img-fluid mt-4" alt="">
              <div class="coach col-sm-12 col-11 text-center" style="padding-top: 20px; height: 450px;">
                <span class="coach_name text-center"> {{$coach->name}} </span>
                <span class="coach_surname text-center"> {{$coach->surname}} </span>
                <hr class="hrtag">
                <span class="text-center"> {{$coach->email}} </span>
                <hr class="hrtag">
                <span class="coach_surname text-center"> {{$coach->phone}} </span>
                <hr class="hrtag">
                <p class="text-center font-weight-bold" style="font-size: 15px;">{{$coach->description}}.</p>
                <a href="{{route('coaches-edit', $coach->id)}}" class="btn btn-warning btn-sm" style="background-color: black; border: 1px solid red; color: white;">Edit</a>
                <form class="" action="{{route('coaches-destroy', $coach->id)}}" method="post" style="display: inline-block;">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  <button type="submit" name="button" class="btn btn-warning btn-sm" style="background-color: black; border: 1px solid red; color: white;">Delete</button>
                </form>
              </div>

            </div>
            @endforeach
          </div>

        </div>

    </div>
    @if (Auth::check())
      @if (Auth::user()->isAdmin())
    <div class="col-md-12 col-sm-12 text-center">
      <a href="{{route('coaches-create')}}" class="btn btn-info" style="background-color: black; border: 1px solid red;"> Add Coaches</a>

    </div>
  @endif
@endif
<ul class="text-center" style="justify-content: center;">

  {{$coaches->links()}}

</ul>

  </section>



@endsection
