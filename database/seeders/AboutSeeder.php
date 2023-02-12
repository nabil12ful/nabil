<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create(
            array('id' => '1','title' => 'I develop Websites & Business','desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Tabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','name' => 'Nabil Hamada','age' => '23','edu' => 'Study in Managment Information Systems','cv' => '#','freelance' => '1','hiring' => '2','image1' => '1676240549about-image-1.png','image2' => '1676240549about-image-2.png','created_at' => NULL,'updated_at' => '2023-02-12 22:22:29')

        );
    }
}
