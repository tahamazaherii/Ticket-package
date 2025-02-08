<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hosts')->insert([
            [
                'Name' => 'Example Host 1',
                'Url' => 'https://example1.com',
                'Token' => Str::uuid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name' => 'Example Host 2',
                'Url' => 'https://example2.com',
                'Token' => Str::uuid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
