<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\options;
use Faker\Generator as Faker;

$factory->define(options::class, function (Faker $faker) {

    return [
        'question_id' => $faker->randomDigitNotNull,
        'option_name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
