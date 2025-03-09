<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('options')->insert([
            [
                'id' => '1',
                'name' => '色',
            ],
            [
                'id' => '2',
                'name' => 'サイズ',
            ],
            [
                'id' => '3',
                'name' => '素材',
            ],
        ]);
    }
}
