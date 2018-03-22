<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Supplement;
use Illuminate\Support\Facades;

class SupplementsSeeder extends Seeder
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
       $url = $faker->image($dir = 'storage/app/public/images', $width = 640, $height = 480, 'food');

       $supplement = new Supplement;
       $supplement->title = $faker->name;
       $supplement->price = $faker->numberBetween(5,50);
       $supplement->file_name = $this->upload($url);
       $supplement->save();
      }
}
}
