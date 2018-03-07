@extends('layouts.app',[
  'class' => 'footer_normal'
])
@section('content')




    <section class="supplements__section mb-4">
      <div class="background_container">
        <div class="row">
          @foreach ($supplement as $supplements)
          <div class="col-md-4">
            <div class="item text-center">
              <img src="{{ $supplements->getUrlAttribute() }}" alt="" class="img-fluid img-border">
              <div class="supplements_border">
                <span>{{$supplements->title}}</span><br>
                <span>{{$supplements->price}}</span><br>
                <a href="{{route('supplements-edit', $supplements->id)}}" class="btn btn-warning btn-sm" style="background-color: black; border: 1px solid red; color: white;">Edit</a>
                <form class="" action="{{route('supplements-destroy', $supplements->id)}}" method="post" style="display: inline-block;">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  <button type="submit" name="button" class="btn btn-warning btn-sm" style="background-color: black; border: 1px solid red; color: white;">Delete</button>
                </form>
              </div>
            </div>
          </div>
        @endforeach
          </div>
          </div>
    </section>
    <div class="col-md-12 col-sm-12 mb-4 text-center">
      <a href="{{route('supplements-create')}}" class="btn btn-info" style="background-color: black; border: 1px solid red;"> Add supplements</a>
    </div>

  @endsection
