<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skus')->insert([
            [
                'id' => '1',
                'product_number' => '100000',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ブラック',
                    'size' => 'L',
                    'Hole' => '有り',
                ]),
                'description' => 'あいうえお',
                'product_id' => 1,
            ],
            [
                'id' => '2',
                'product_number' => '100001',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ホワイト',
                    'size' => 'M',
                    'Hole' => '有り',
                ]),
                'description' => 'かきくけこ',
                'product_id' => 1,
            ],
            [
                'id' => '3',
                'product_number' => '100002',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ブラウン',
                    'size' => 'S',
                    'Hole' => '有り',
                ]),
                'description' => 'さしすせそ',
                'product_id' => 1,
            ],
        ]);
    }
}
