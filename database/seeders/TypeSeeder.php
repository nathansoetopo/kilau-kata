<?php

namespace Database\Seeders;

use App\Models\TypeModel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeModel::create([
            'name' => 'E-Book',
            'slug' => Str::slug('E-Book'),
            'description' => '-',
            'asset' => 1,
        ]);

        TypeModel::create([
            'name' => 'Video Book',
            'slug' => Str::slug('Video Book'),
            'description' => '-',
            'asset' => 1,
        ]);

        TypeModel::create([
            'name' => 'Audio Book',
            'slug' => Str::slug('Audio Book'),
            'description' => '-',
            'asset' => 1,
        ]);

        TypeModel::create([
            'name' => 'Games',
            'slug' => Str::slug('Games'),
            'description' => '-',
            'asset' => 2,
        ]);
    }
}
