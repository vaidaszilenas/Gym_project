<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Workout;
use Illuminate\Support\Facades;

class WorkoutSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
   protected  function upload($url){
    $photoUrl = explode('/', $url);
    $url = $photoUrl[2].'/'.$photoUrl[3].'/'.$photoUrl[4];
    return $url;
  }

  public function run()
  {
    $faker = Faker::create();

     $faker->name();

   foreach(range(1,40) as $x) {
     $url = $faker->image($dir = 'storage/app/public/images', $width = 640, $height = 480, 'sports');

     $workout = new Workout;
     $workout->workout = $faker->name;
     $workout->description = $faker->realText(100);
     $workout->day = $faker->dayOfWeek();
     $workout->time = $faker->time('H');
     $workout->file_name = $this->upload($url);
     $workout->save();
    }
}
}
