@extends('layouts.app',[
  'class' => 'footer_normal'
])

@section('content')



  <section>
    <div class="background_container">
      <div class="row">
            <div class="col-md-6 col- workout workout_color">
              <h2 class="zumba">{{$workout->workout}}</h2>
                <p>{{$workout->description}}</p>
            </div>
            <div class="col-md-6 col- workout mb-3">
                @if ($workout->file_name != NULL)
                  <img class="workout_img" src="{{$workout->getUrlAttribute()}}" alt="">
                @endif
            </div>

        </div>
    </div>
  </section>
  <section>



    <div class="background_container">
      <div class="row">
        <div class="col-md-12 col- col-sm">
          <table class="table table-dark table-bordered">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                      Do you want to participate in this workout?
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <span>Free space: 20</span><br>
                    <span>Reserved:</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 12%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">12</div>
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form class="" action="index.html" method="post">
                      <button type="button" class="btn btn-primary">Registration</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <thead>
              <tr>
                <th scope="col">Time/Day</th>
                <th scope="col">I</th>
                <th scope="col">II</th>
                <th scope="col">III</th>
                <th scope="col">IV</th>
                <th scope="col">V</th>
                <th scope="col">VI</th>
                <th scope="col">VII</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($times as $key => $time)
                <tr>
                  <th scope="row">{{$time}}</th>
                  @foreach ($days as $day)
                    <td  class="hover">
                    @if (array_key_exists($key, $workoutPlan) and array_key_exists($day, $workoutPlan[$key]))
                      @foreach ($workoutPlan[$key][$day] as $w)
                        <a href="#" data-toggle="modal" data-target="#exampleModal">{{$w['workout']}}</a>
                      @endforeach
                    @else
                      -
                    @endif

                    </td>
                @endforeach

                </tr>
              @endforeach

            </tbody>
          </table>
          @if (Auth::check())
            @if (Auth::user()->isAdmin())
          <form class="mb-5" action="{{route('workout-destroy', $workout->id)}}" method="post" style="display: inline-block;">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="submit" name="button" class="btn btn-warning btn-sm" style="background-color: black; border: 1px solid red; color: white;">Delete</button>
          </form>
        @endif
      @endif
        </div>
      </div>
    </div>
  </section>

























@endsection
