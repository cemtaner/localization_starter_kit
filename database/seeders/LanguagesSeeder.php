<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ['code' => 'tr', 'name' => 'Türkçe'],
            ['code' => 'en', 'name' => 'English'],
        ];

        DB::table('languages')->insert($languages); 
    }
}
