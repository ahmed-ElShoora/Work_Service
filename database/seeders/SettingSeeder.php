<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title_en' => 'Site',
            'title_ar' => 'موقع',
            'logo'=>'image.jpg',
            'google_link'=>'google_link',
            'apple_link'=>'apple_link',
            'facebook_link'=>'facebook_link',
            'twiter_link'=>'twiter_link',
            'youtube_link'=>'youtube_link',
            'email'=>'email',
            'phone'=>111111111,
            'desc_ar'=>'test',
            'desc_en'=>'test',
            'howuse_ar'=>'test',
            'howuse_en'=>'test',
        ]);
    }
}
