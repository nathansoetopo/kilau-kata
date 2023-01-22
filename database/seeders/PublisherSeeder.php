<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\PublisherModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublisherModel::create([
            'name' => 'Penerbit Bimasakti Bumi',
            'slug' => Str::slug('Penerbit Bimasakti Bumi'),
            'link' => '-'
        ]);

        PublisherModel::create([
            'name' => 'PT. EMWE KREATIF INDONESIA',
            'slug' => Str::slug('PT. EMWE KREATIF INDONESIA'),
            'link' => '-'
        ]);

        PublisherModel::create([
            'name' => 'CV. KYTA JAYA MANDIRI',
            'slug' => Str::slug('CV. KYTA JAYA MANDIRI'),
            'link' => '-'
        ]);
    }
}
