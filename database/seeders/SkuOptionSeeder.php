<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkuOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sku_options')->insert([
            [
                'id' => '1',
                'sku_id' => '1',
                'option_id' => '2',
                'name' => 'Lサイズ',
            ],
            [
                'id' => '2',
                'sku_id' => '1',
                'option_id' => '1',
                'name' => 'ブラック',
            ],
            [
                'id' => '3',
                'sku_id' => '2',
                'option_id' => '1',
                'name' => 'ホワイト',
            ],
            [
                'id' => '4',
                'sku_id' => '3',
                'option_id' => '1',
                'name' => 'ブラウン',
            ],
            [
                'id' => '5',
                'sku_id' => '2',
                'option_id' => '2',
                'name' => 'Sサイズ',
            ],
            [
                'id' => '6',
                'sku_id' => '3',
                'option_id' => '2',
                'name' => 'Mサイズ',
            ],
        ]);
    }
}
