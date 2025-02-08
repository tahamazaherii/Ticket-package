<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = DB::table('users')->inRandomOrder()->first();
        $officer = DB::table('users')->inRandomOrder()->first();
        $category = DB::table('categories')->inRandomOrder()->first();

        if (!$user || !$category) {
            return;
        }

        DB::table('tickets')->insert([
            [
                'UserID' => $user->id,
                'OfficerID' => $officer ? $officer->id : null,
                'CategoryID' => $category->id,
                'ReplyID' => null,
                'Title' => 'Problem with login',
                'Description' => 'I am unable to log into my account.',
                'Status' => 'open',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'UserID' => $user->id,
                'OfficerID' => $officer ? $officer->id : null,
                'CategoryID' => $category->id,
                'ReplyID' => null,
                'Title' => 'Feature request',
                'Description' => 'I would like to suggest a new feature.',
                'Status' => 'open',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
