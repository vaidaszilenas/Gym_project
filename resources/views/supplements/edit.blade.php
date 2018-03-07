@extends('layouts.app', [
  'class' => 'section-box'
])
@section('content')


  <div class="background_container">


  <div class="row">
   <div class="col-md-12">
       <div class="panel panel-default text"  style="margin-top: 60px; color: white;">
           <h1 class="panel-heading">
           New Supplements
         </h1>
           <div class="panel-body">
               <form class="form-horizontal" method="POST" action="{{route('supplements-update', $supplement->id)}}" enctype="multipart/form-data">
                 {!!csrf_field() !!}

               <div class="form-group">
                       <label for="title" class="col-md-4 control-label">Title</label>
                       <div class="col-md-6">
                           <input id="title" type="text" class="form-control" name="title" value="{{old('title', $supplement->title)}}">
                           @if ($errors->has('title'))
                             <span style="color:red;">{{$errors->first('title')}}</span><br>
                           @endif
                                                       </div>
                   </div>

                   <div class="form-group">
                       <label for="price" class="col-md-4 control-label">Price</label>
                       <div class="col-md-6">
                           <input id="price" type="text" step="0.01" class="form-control" name="price" value="{{old('price',$supplement->price)}}">
                           @if ($errors->has('price'))
                             <span style="color:red;">{{$errors->first('price')}}</span><br>
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
                           <button type="submit" class="btn btn-primary" style="background: black; border: 1px solid red;">
                               Save
                           </button>

                               <a href="{{route('supplements')}}"
                          class="btn btn-danger" style="background: black; border: 1px solid red;">
                          Back
                          </a>

                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
  </div>
  </div>
  </div>


@endsection
