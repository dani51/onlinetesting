<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\questions;
use Faker\Generator as Faker;

$factory->define(questions::class, function (Faker $faker) {

    return [
        'subject_id' => $faker->randomDigitNotNull,
        'total_questions' => $faker->randomDigitNotNull,
        'question_name' => $faker->word,
        'question_time' => $faker->randomDigitNotNull,
        'question_answer' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
