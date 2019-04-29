<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Skill;
use Faker\Generator as Faker;

$factory->define(skill::class, function (Faker $faker) {
    return [
        'name' => $faker->title
    ];
});
