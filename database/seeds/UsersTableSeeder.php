<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //limpiamos la base de datos de cualquier registro existente.
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('qweasd123');

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@itms.com',
            'password' => $password,
        ]);

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
