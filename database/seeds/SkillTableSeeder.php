<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $faker = Faker\Factory::create();

       $limit = 33;

       for ($i = 0; $i < $limit; $i++) {
           DB::table('name')->insert([ //,
                 'name' -> $faker->word,
           ]);
       }
     }
}
