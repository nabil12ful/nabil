<?php

namespace Database\Seeders;

use App\Models\WhoWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhoWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WhoWork::create(
            array('id' => '1','title' => 'Best result with top user experience','desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eureh lit anim id est laborum.','image' => '1676241591feature-photo.png','icon1' => 'pe-7s-umbrella','title1' => 'Lifetime Support','desc1' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia mollit anim id est laborum.','icon2' => 'pe-7s-box2','title2' => 'No Coding Required','desc2' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia mollit anim id est laborum.','icon3' => 'pe-7s-refresh-2','title3' => 'Regular Updates','desc3' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia mollit anim id est laborum.','created_at' => NULL,'updated_at' => '2023-02-12 22:39:51')
        );
    }
}
