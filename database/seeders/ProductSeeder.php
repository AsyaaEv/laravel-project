<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Minyak Goreng 1L',
            'price' => 13000,
            'code' => 'PP001'
        ]);
        Product::create([
            'name' => 'Susu Ultramilk 1L',
            'price' => 20000,
            'code' => 'PP002'
        ]);
        Product::create([
            'name' => 'Sari Roti Tawar',
            'price' => 15000,
            'code' => 'PP003'
        ]);
        Product::create([
            'name' => 'Whiskas Basah 85gram',
            'price' => 8000,
            'code' => 'FP001'
        ]);
        Product::create([
            'name' => 'Whiskas kering 1kg',
            'price' => 28000,
            'code' => 'FP002'
        ]);
    }
}
