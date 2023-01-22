<?php

namespace Database\Seeders;

use App\Models\AuthorModel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthorModel::create([
            'name' => 'Abd Allah Nasih Ulwan',
            'slug' => Str::slug('Abd Allah Nasih Ulwan')
        ]);
        AuthorModel::create([
            'name' => 'Maelo',
            'slug' => Str::slug('Maelo')
        ]);
        AuthorModel::create([
            'name' => 'Dietmar Rothermund',
            'slug' => Str::slug('Dietmar Rothermund')
        ]);
        AuthorModel::create([
            'name' => 'Nor Kholis Reefani',
            'slug' => Str::slug('Nor Kholis Reefani')
        ]);
        AuthorModel::create([
            'name' => 'Amy Dockster Marcus',
            'slug' => Str::slug('Amy Dockster Marcus')
        ]);
        AuthorModel::create([
            'name' => 'Vicki Cobb dan Kathy Darling',
            'slug' => Str::slug('Vicki Cobb dan Kathy Darling')
        ]);
    }
}
