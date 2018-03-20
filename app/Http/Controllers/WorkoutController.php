<?php

namespace App\Http\Controllers;

use App\Workout;
use Auth;
use DB;
use App\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $workouts = Workout::all();
        return view('workouts.workouts',[
          'workouts' => $workouts
      ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('workouts.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'file_name'=>'required',
        'workout'=>'required|min:2',
        'description'=>'required|min:10',
        'day'=>'required',
        'time'=>'required'

      ]);


      $getValueDay = $request->input('day');
      $getValueTime = $request->input('time');

      $path = $request->file('file_name')->storePublicly('public/images/workouts');

      $post = [
        'file_name'=> $path,
        'workout'=>$request['workout'],
        'description'=>$request['description'],
        'day'=>$getValueDay['0'],
        'time'=>$getValueTime,
        'users_id'=>Auth::user()->id
      ];

      // var_dump($post);

      Workout::create($post);

      $post = $request->except('_token');


      return redirect()->route('workout');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function show(Workout $workout, $id)
    {
      $workout = Workout::findOrFail($id);
      $workouts = Workout::orderBy('time')->get()->groupBy('time')->map(function($day){
        return $day->groupBy('day');
      });
      // dd($workouts);
      return view('workouts.show',[
        'workout' => $workout,
        'workoutPlan' => $workouts->toArray(),
        'days' => [
          "monday",
          "thuesday",
          "wednesday",
          "thursday",
          "friday",
          "saturday",
          "sunday"
        ],
        'times' => [
          "8"=>"08:00",
          "9"=>"09:00",
          "10"=>"10:00",
          "11"=>"11:00",
          "14"=>"14:00",
          "18"=>"18:00",
          "20"=>"20:00"
        ]
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function edit(Workout $workout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workout $workout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workout $workout)
    {
        //
    }
}
