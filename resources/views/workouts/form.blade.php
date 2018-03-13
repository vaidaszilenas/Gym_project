@extends('layouts.app', [
  'class' => 'footer_normal'
])
@section('content')


  <div class="background_container">


  <div class="row">
   <div class="col-md-12">
       <div class="panel panel-default text"  style="margin-top: 60px; color: white;">
           <h1 class="panel-heading">
           New Workouts
         </h1>
           <div class="panel-body">
               <form class="form-horizontal" method="POST" action="{{ route('workout-store')}}" enctype="multipart/form-data">
                 {!!csrf_field() !!}

               <div class="form-group">
                       <label for="workout" class="col-md-4 control-label">Workout title</label>
                       <div class="col-md-6">
                           <input id="workout" type="text" class="form-control" name="workout" value="{{old('workout')}}">
                           @if ($errors->has('workout'))
                             <span style="color:red;">{{$errors->first('workout')}}</span><br>
                           @endif
                                                       </div>
                   </div>

                   <div class="form-group">
                       <label for="description" class="col-md-4 control-label">Description</label>
                       <div class="col-md-6">
                         <textarea name="description" rows="8" cols="80">{{old('description')}}</textarea>
                           @if ($errors->has('description'))
                             <span style="color:red;">{{$errors->first('description')}}</span><br>
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
                       <label for="day" class="col-md-4 control-label">Day</label>
                       <div class="col-md-6">
                         <select name="day[]" id="day">
                          <option value="monday">Monday</option>
                          <option value="thuesday">Thuesday</option>
                          <option value="wednesday">Wednesday</option>
                          <option value="thursday">Thursday</option>
                          <option value="friday">Friday</option>
                          <option value="saturday">Saturday</option>
                          <option value="sunday">Sunday</option>
                        </select>
                           @if ($errors->has('day'))
                             <span style="color:red;">{{$errors->first('day')}}</span><br>
                           @endif
                                                       </div>
                   </div>
                   <div class="form-group">
                       <label for="time" class="col-md-4 control-label">Time</label>
                       <div class="col-md-6">
                         <select name="time" id="time">
                          <option value="08">08:00</option>
                          <option value="09">09:00</option>
                          <option value="10">10:00</option>
                          <option value="11">11:00</option>
                          <option value="14">14:00</option>
                          <option value="18">18:00</option>
                          <option value="20">20:00</option>
                        </select>
                           @if ($errors->has('time'))
                             <span style="color:red;">{{$errors->first('time')}}</span><br>
                           @endif
                                                       </div>
                   </div>

                   <div class="form-group">
                       <div class="col-md-6 col-md-offset-4">
                           <button type="submit" class="btn btn-primary" style="background: black; border: 1px solid red;">
                               Save
                           </button>

                               <a href="{{route('workout')}}"
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
