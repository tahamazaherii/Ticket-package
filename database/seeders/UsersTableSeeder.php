<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = DB::table('hosts')->inRandomOrder()->first();

        if (!$host) {
            $hostId = DB::table('hosts')->insertGetId([
                'Name' => 'Default Host',
                'Url' => 'https://default.com',
                'Token' => Str::uuid(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $hostId = $host->id;
        }

        DB::table('users')->insert([
            [
                'Name' => 'Ali',
                'Family' => 'Ahmadi',
                'HostID' => $hostId,
                'UserName' => 'ali_ahmadi',
                'Description' => 'Test user description',
                'CompanyName' => 'TechCorp',
                'email' => 'ali@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name' => 'Sara',
                'Family' => 'Mohammadi',
                'HostID' => $hostId,
                'UserName' => 'sara_mohammadi',
                'Description' => 'Another test user',
                'CompanyName' => 'BizTech',
                'email' => 'sara@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password456'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
