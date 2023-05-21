<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Grevalby',
            'email' => 'grevalby@gmail.com',
            'password' => bcrypt('password'),
            'photo' => 'http://www.grevalby.com/po-content/po-upload/grevalby_logo.jpg?i=24166'
        ]);
    }
}
