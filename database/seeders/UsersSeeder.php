<?php

namespace Database\Seeders;

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
        // Masukkan data ke MongoDB
        User::create([
            'name' => 'Robert',
            'email' => 'robertwirawan41@gmail.com',
            'password' => bcrypt('admin'), // Hash password
        ]);



        // Tambahkan data lain sesuai kebutuhan
    }
}
