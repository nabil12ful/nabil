<?php

namespace Database\Seeders;

use App\Models\MyWorld;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MyWorldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MyWorld::create(
            array('id' => '1','title' => 'WELCOME TO MY WORLD','title1' => 'Creativity','title2' => 'Dedication','title3' => 'Hard Work','desc' => 'I\'m a young tech enthasist and entrepreneur who love to take risk. I grew up in a tech family in Giza City.','desc1' => 'Duis aute irure dolor in it esse cillum dolore eu fugiat nulla pari erunt mollit anim id est laborum.','desc2' => 'Beaboris nisi ut aliquip ex ea commodo consen cillum dolore eu fugiat nulla pariatur.','desc3' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui offi llit anim id est laborum.','icon1' => 'pe-7s-science','icon2' => 'pe-7s-diamond','icon3' => 'pe-7s-rocket','created_at' => NULL,'updated_at' => '2023-02-12 21:47:14')
        );
    }
}
