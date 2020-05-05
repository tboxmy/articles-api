<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
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

        // And now, let's create a few articles in our database:

        for ($i = 0; $i < 50; $i++) {

            Article::create([

                'author_id' => $faker->numberBetween(1, 2),

                'title' => $faker->sentence,

                'content' => $faker->text,

            ]);

        }
    }
}
