@extends('layouts.app',[
  'class' => 'footer_normal'
])
@section("content")







    <section class="supplements__section mb-4">
      <div class="background_container">
        <div class="row">
          <div class="col-md-12 mt-5">
            <div class="text-center">
              <form action="{{route('supplements')}}" method="GET" style="display: inline-block">
                {{csrf_field()}}
                <div class="input-group">
                    <input type="text" class="form-control" style="background-color: black; border: 1px solid red; color: white;" name="searchTerm" placeholder="Search for..." value="{{ isset($searchTerm) ? $searchTerm : '' }}">
                    <span class="input-group-btn ml-1">
                        <button class="btn btn-secondary" type="submit" style="background-color: black; border: 1px solid red; color: white;">Search</button>
                    </span>
                </div>
              </form>
            </div>
          </div>
          @foreach ($supplements as $supplement)

          <div class="col-md-4">
            <div class="item text-center">
              <img src="{{ $supplement->getUrlAttribute() }}" alt="" class="img-fluid img-border">
              <div class="supplements_border">
                <span>{{$supplement->title}}</span><br>
                <span>{{$supplement->price}}</span><br>
              @if (Auth::check())
                @if (Auth::user()->isAdmin())
                  <a href="{{route('supplements-edit', $supplement->id)}}" class="btn btn-warning btn-sm" style="background-color: black; border: 1px solid red; color: white;">Edit</a>
                  <form class="" action="{{route('supplements-destroy', $supplement->id)}}" method="post" style="display: inline-block;">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" name="button" class="btn btn-warning btn-sm" style="background-color: black; border: 1px solid red; color: white;">Delete</button>
                  </form>
                @endif
              @endif

              </div>
            </div>
          </div>

        @endforeach
          </div>
          </div>
    </section>
  @if (Auth::check())
    @if (Auth::user()->isAdmin())
      <div class="col-md-12 col-sm-12 mb-4 text-center">
        <a href="{{route('supplements-create')}}" class="btn btn-info" style="background-color: black; border: 1px solid red;"> Add supplements</a>
      </div>
    @endif
  @endif


  @endsection
