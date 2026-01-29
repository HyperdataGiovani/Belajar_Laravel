<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'slug' => 'domain-expansion',
            'name' => 'Domain Expansion'
        ]);
        Category::create([
            'slug' => 'ce',
            'name' => 'Curse Energy'
        ]);
        Category::create([
            'slug' => 'ct',
            'name' => 'Curse Technique'
        ]);
        Category::create([
            'slug' => 'rct',
            'name' => 'Reverse Curse Technique'
        ]);
        Category::create([
            'slug' => 'spcl',
            'name' => 'Special'
        ]);
    }
}
