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
                'product_number' => '100000',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ブラック',
                    'size' => '横幅60cm奥行き60cm',
                    'Hole' => '有り',
                ]),
                'description' => 'あいうえお',
                'product_id' => 1,
            ],
            [
                'product_number' => '1000201',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ブラック',
                    'size' => '横幅80cm奥行き60cm',
                    'Hole' => '有り',
                ]),
                'description' => 'あいうえお',
                'product_id' => 1,
            ],
            [
                'product_number' => '104000',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ブラック',
                    'size' => '横幅100cm奥行き60cm',
                    'Hole' => '有り',
                ]),
                'description' => 'あいうえお',
                'product_id' => 1,
            ],
            [
                'product_number' => '100004',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ブラック',
                    'size' => '横幅60cm奥行き60cm',
                    'Hole' => '無し',
                ]),
                'description' => 'あいうえお',
                'product_id' => 1,
            ],
            [
                'product_number' => '100001',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ホワイト',
                    'size' => '横幅60cm奥行き60cm',
                    'Hole' => '有り',
                ]),
                'description' => 'かきくけこ',
                'product_id' => 1,
            ],
            [
                'product_number' => '100002',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ブラウン',
                    'size' => '横幅60cm奥行き60cm',
                    'Hole' => '有り',
                ]),
                'description' => 'さしすせそ',
                'product_id' => 1,
            ],
            [
                'product_number' => '100010',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ブラック',
                    'size' => '横幅60cm奥行き60cm',
                    'Hole' => '有り',
                    '丸角加工' => '有り',
                ]),
                'description' => 'あいうえお',
                'product_id' => 2,
            ],
            [
                'product_number' => '100014',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ブラック',
                    'size' => '横幅60cm奥行き60cm',
                    'Hole' => '無し',
                    '丸角加工' => '無し',
                ]),
                'description' => 'あいうえお',
                'product_id' => 2,
            ],
            [
                'product_number' => '100011',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ホワイト',
                    'size' => '横幅60cm奥行き60cm',
                    'Hole' => '有り',
                    '丸角加工' => '無し',
                ]),
                'description' => 'かきくけこ',
                'product_id' => 2,
            ],
            [
                'product_number' => '100012',
                'price' => 100,
                'stock' => 20,
                'style' => json_encode([
                    'color' => 'ブラウン',
                    'size' => '横幅60cm奥行き60cm',
                    'Hole' => '有り',
                    '丸角加工' => '有り',
                ]),
                'description' => 'さしすせそ',
                'product_id' => 2,
            ],
        ]);
    }
}
