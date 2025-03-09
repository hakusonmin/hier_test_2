<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => '1',
                'parent_id' => 'null',
                'name' => '家具・オフィス',
                'level' => 1,
            ],
            [
                'id' => '2',
                'parent_id' => '1',
                'name' => 'デスク',
                'level' => 2,
            ],
            [
                'id' => '3',
                'parent_id' => '2',
                'name' => 'ワーキングデスク',
                'level' => 3,
            ],
            [
                'id' => '4',
                'parent_id' => 'null',
                'name' => 'スマートフォン',
                'level' => 1,
            ],
            [
                'id' => '5',
                'parent_id' => 'null',
                'name' => 'PC',
                'level' => 1,
            ],
            [
                'id' => '6',
                'parent_id' => '1',
                'name' => 'チェア',
                'level' => 2,
            ],
            [
                'id' => '7',
                'parent_id' => '2',
                'name' => '子供用デスク',
                'level' => 3,
            ],
            [
                'id' => '8',
                'parent_id' => '4',
                'name' => 'iPhone',
                'level' => 2,
            ],
            [
                'id' => '9',
                'parent_id' => '4',
                'name' => 'Android',
                'level' => 2,
            ],
        ]);
    }
}
