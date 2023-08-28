<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HowUseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('howuse')->insert([
            'video'=>'test value',
            'desc_ar'=>'test value',
            'desc_en'=>'test value',
        ]);
    }
}
