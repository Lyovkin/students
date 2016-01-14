<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
const GROUP = 'СШИс-15-1';


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Student::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname'  => $faker->lastName,
        'gender'    => gender(array('male', 'female')),
        'group'     => GROUP,
        'marks'     => random_int(600, 900),
        'birthday'  => $faker->date(),
        'phone'     =>$faker->phoneNumber,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


function gender(array $gender) {
    $result = '';

    foreach ($gender as $value) {
        $result = $value;
    }

    return $result;
}