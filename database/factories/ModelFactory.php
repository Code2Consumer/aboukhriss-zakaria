<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Experience;
use App\Project;
use App\Skill;
use App\Study;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Skill::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
    ];
});

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'description' => $faker->text(200),
    ];
});

$factory->define(Experience::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'description' => $faker->text(),
        'start' => $faker->date(),
        'end' => $faker->date()
    ];
});