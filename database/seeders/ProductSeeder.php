<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => '1',
                'name' => 'シンプルデスク',
                'description' => 'あいうえお',
                'category_id' => '3',
            ],
            [
                'id' => '2',
                'name' => 'L字デスク',
                'description' => 'さしすせそ',
                'category_id' => '3',
            ],            [
                'id' => '3',
                'name' => 'U字デスク',
                'description' => 'たちつてと',
                'category_id' => '3',
            ],
        ]);
    }
}
