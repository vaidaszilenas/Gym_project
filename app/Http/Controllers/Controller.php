<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use View;
use App\Http\Controllers\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
 {
   // //its just a dummy data object.
   // $workouts = DB::table('workout')->get();
   //
   // // Sharing is caring
   // View::share('workouts', $workouts);
 }
}
