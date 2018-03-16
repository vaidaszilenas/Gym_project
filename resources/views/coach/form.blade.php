@extends('layouts.app', [
  'class' => 'footer_normal'
])
@section('content')


  <div class="background_container">


    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default text"  style="margin-top: 60px; color: white;">
          <h1 style="padding-left: 15px; margin-top: 15px;">
            New Coaches
          </h1>

          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('coaches-store')}}" enctype="multipart/form-data">
              {!!csrf_field() !!}

              <div class="form-group">
                <label for="name" class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}">
                  @if ($errors->has('name'))
                    <span style="color:red;">{{$errors->first('name')}}</span><br>
                  @endif
                </div>
              </div>


              <div class="form-group">
                <label for="title" class="col-md-4 control-label">Surname</label>
                <div class="col-md-6">
                  <input id="surname" type="text" class="form-control" name="surname" value="{{old('surname')}}">
                  @if ($errors->has('surname'))
                    <span style="color:red;">{{$errors->first('surname')}}</span><br>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label for="title" class="col-md-4 control-label">Description</label>
                <div class="col-md-6">
                  <textarea id="description" type="text" class="form-control" name="description" value="{{old('description')}}"></textarea>
                  @if ($errors->has('description'))
                    <span style="color:red;">{{$errors->first('description')}}</span><br>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label for="price" class="col-md-4 control-label">Email</label>
                <div class="col-md-6">
                  <input id="email" type="text" step="0.01" class="form-control" name="email" value="{{old('email')}}">
                  @if ($errors->has('email'))
                    <span style="color:red;">{{$errors->first('email')}}</span><br>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label for="price" class="col-md-4 control-label">Phone</label>
                <div class="col-md-6">
                  <input id="phone" type="text" step="0.01" class="form-control" name="phone" value="{{old('phone')}}">
                  @if ($errors->has('phone'))
                    <span style="color:red;">{{$errors->first('phone')}}</span><br>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label for="image_url" class="col-md-4 control-label">Image pic</label>
                <div class="col-md-6">
                  <input style="padding-top: 5px"id="image_url" type="file" class="" name="file_name" value=""><br>
                  @if ($errors->has('file_name'))
                    <span style="color:red;">{{$errors->first('file_name')}}</span><br>
                  @endif
                </div>
              </div>



            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" style="background: black; border: 2px solid red;">
                  Save
                </button>
</form>
                <a href="{{route('coaches')}}"
                class="btn btn-danger" style="background: black; border: 1px solid red;">
                Back
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
