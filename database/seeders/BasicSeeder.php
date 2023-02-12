<?php

namespace Database\Seeders;

use App\Models\Basic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Basic::create([
            'id' => '1',
            'name' => 'Nabil Hamada',
            'logo' => '1676234763logo7.png',
            'fav' => '1676234763fav.png',
            'desc' => 'Description',
            'image' => '1676234763hero_main_image.png',
            'keywords' => 'nabil, hamada, programming',
        ]);
    }
}
