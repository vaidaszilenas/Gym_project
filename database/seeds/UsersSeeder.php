<?php
use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          $faker = Faker::create();
          $faker->name();

        foreach(range(1,10) as $x) {

          $users = new User;
          $users->is_admin = 0;
          $users->name = $faker->name;
          $users->email = $faker->email;
          $users->password = bcrypt('admin');
          $users->save();
   // sudo dpkg -i virtualboxo failas

    }
  }
}
