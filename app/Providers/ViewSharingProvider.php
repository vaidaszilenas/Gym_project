<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Workout;
use DB;
use App\Http\Controllers\Auth;


class ViewSharingProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $workouts = DB::table('workout')->get();

        // Sharing is caring
        View::share('workouts', $workouts);


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
