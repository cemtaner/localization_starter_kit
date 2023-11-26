<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages_tr = [
            ['title' => 'Anasayfa', 'content' => 'Anasayfa içeriği', 'slug' => 'anasayfa', 'language' => 'tr', 'type' => 'home'],
            ['title' => 'Hakkımızda', 'content' => 'Hakkımızda içeriği', 'slug' => 'hakkimizda', 'language' => 'tr', 'type' => 'about'],
            ['title' => 'Hizmetlerimiz', 'content' => 'Hizmetlerimiz içeriği', 'slug' => 'hizmetlerimiz', 'language' => 'tr', 'type' => 'services'],
            ['title' => 'İletişim', 'content' => 'İletişim içeriği', 'slug' => 'anasayfa', 'language' => 'tr', 'type' => 'home'],
            
        ];

        $pages_en = [
            ['title' => 'Homepage', 'content' => 'Homepage content', 'slug' => 'homepage', 'language' => 'en', 'type' => 'home'],
            ['title' => 'About Us', 'content' => 'About Us content', 'slug' => 'about us', 'language' => 'en', 'type' => 'about'],
            ['title' => 'Our Services', 'content' => 'Our Services content', 'slug' => 'our services', 'language' => 'en', 'type' => 'services'],
            ['title' => 'Contact', 'content' => 'Contact content', 'slug' => 'home', 'language' => 'en', 'type' => 'home'],
           
        ];

        DB::table('pages')->insert($pages_tr); 
        DB::table('pages')->insert($pages_en); 
    }
}
