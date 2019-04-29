<?php

use Illuminate\Database\Seeder;
use App\Skill;
class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  $count = 10;
  factory(Skill::class, $count)-> create();
}
