<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Jefferson Bustamante',
            'email' => 'jjbajb53@willmaca.com',
            'email_verified_at' => now(),
            'password' => bcrypt('110991'),
            'roles' => 1,
        ]);

        User::create([
            'name'  => 'Maria Eugenia Hermoso',
            'email' => 'mariah@willmaca.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'roles' => 1,
        ]);

        User::create([
            'name'  => 'Veruzka Arteaga',
            'email' => 'vnma1998@willmaca.com',
            'email_verified_at' => now(),
            'password' => bcrypt('110898'),
            'roles' => 2,
        ]);

        User::create([
            'name'  => 'Jefferson Bustamante',
            'email' => 'jjbajb52@willmaca.com',
            'email_verified_at' => now(),
            'password' => bcrypt('110991'),
            'roles' => 2,
        ]);

        User::create([
            'name'  => 'Jefferson Bustamante',
            'email' => 'jjbajb@willmaca.com',
            'email_verified_at' => now(),
            'password' => bcrypt('110991'),
            'roles' => 3,
        ]);

    }
}
