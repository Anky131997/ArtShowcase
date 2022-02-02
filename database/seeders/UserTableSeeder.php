<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email' , 'admin@admin.com')->first();

        if(!$user) {

            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'age' => '99',
                'gender' => 'male',
                'number' => '9999',
                'insta' => '',
                'youtube' => '',
                'facebook' => '',
                'image' => '',
                'role' => 'admin',
                'password' => Hash::make('password')
            ]);
        }
    }
}
