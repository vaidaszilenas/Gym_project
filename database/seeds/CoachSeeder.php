<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Coach;
use Illuminate\Support\Facades;

class CoachSeeder extends Seeder
{
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
    $url = $faker->image($dir = 'storage/app/public/images', $width = 640, $height = 480, 'people');

    $coach = new Coach;
    $coach->name = $faker->name;
    $coach->surname = $faker->lastName;
    $coach->email = $faker->email;
    $coach->phone = $faker->phoneNumber;
    $coach->description = $faker->realText(rand(200,201));
    $coach->file_name = $this->upload($url);
    $coach->save();
   }
}
}
