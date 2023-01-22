<?php

namespace Database\Seeders;

use App\Models\CategoriesModel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriesModel::create([
            'name' => 'Agama',
            'slug' => Str::slug('Agama'),
            'description' => '-'
        ]);

        CategoriesModel::create([
            'name' => 'Bahasa',
            'slug' => Str::slug('Bahasa'),
            'description' => '-'
        ]);

        CategoriesModel::create([
            'name' => 'Buku Pelajaran',
            'slug' => Str::slug('Buku Pelajaran'),
            'description' => '-'
        ]);
    }
}
