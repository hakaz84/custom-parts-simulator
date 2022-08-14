<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $part = new \App\Models\Part([
            'parts_type' => '攻撃系',
            'parts_name' => '格闘強化プログラム',
            'parts_level' => 1,
            'parts_detail' => '格闘補正が2増加',
            'close_cost' => 1,
            'middle_cost' => 0,
            'long_cost' => 0,
        ]);
        $part->save();

        $part = new \App\Models\Part([
            'parts_type' => '防御系',
            'parts_name' => '強化フレーム',
            'parts_level' => 1,
            'parts_detail' => '機体HPが200増加',
            'close_cost' => 0,
            'middle_cost' => 0,
            'long_cost' => 1,
        ]);
        $part->save();
    }
}
