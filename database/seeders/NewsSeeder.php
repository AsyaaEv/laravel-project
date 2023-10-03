<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'judul' => 'Halo Halo', 
            'artikel' => 'Apa yaa ga tau deh males pengen beli truk'
        ]);
    }
}
