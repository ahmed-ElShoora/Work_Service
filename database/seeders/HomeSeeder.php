<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home')->insert([
            'logo'=>'test value',
            'title_ar'=>'test value',
            'title_en'=>'test value',
            'desc_ar'=>'test value',
            'desc_en'=>'test value',
            'button_ar'=>'test value',
            'button_en'=>'test value',
            'button_color'=>'test value',
        ]);
    }
}
