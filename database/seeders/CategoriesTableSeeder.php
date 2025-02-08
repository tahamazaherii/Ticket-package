<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = DB::table('users')->inRandomOrder()->first();

        if (!$user) {
            $userId = DB::table('users')->insertGetId([
                'Name' => 'Default',
                'Family' => 'User',
                'Ncode' => rand(100, 999),
                'Phone' => rand(1000, 9999),
                'HostID' => 1,
                'UserName' => 'default_user',
                'Description' => 'Default user for seeding',
                'CompanyName' => 'None',
                'email' => 'default@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $userId = $user->id;
        }

        DB::table('categories')->insert([
            [
                'UserID' => $userId,
                'Name' => 'Technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'UserID' => $userId,
                'Name' => 'Science',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'UserID' => $userId,
                'Name' => 'Health',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
