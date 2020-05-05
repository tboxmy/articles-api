<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        // And now, let's create a 2 authors in our database:
        Person::create([

    'first_name' => 'Tboxmy', 
    'last_name' => $faker->lastName,
    'contact_url' => $faker->unique()->email,
    ]);



    Person::create([
    'first_name' => 'Nicholas',
    'last_name' => $faker->lastName,
    'contact_url' => $faker->unique()->email,
    ]);   

    
    }
}
