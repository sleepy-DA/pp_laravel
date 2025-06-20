<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admineccomerce@example.com',
            'address' => 'Phnom Penh',
            
            'password' => Hash::make('eccomerce123!'),
            'usertype' => 1,
        ]);
       

    }
}
