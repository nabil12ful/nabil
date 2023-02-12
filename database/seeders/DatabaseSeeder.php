<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            User::create([
            'name' => 'Nabil Hamada',
            'email' => 'nabilhamada421@gmail.com',
            'password' => Hash::make('12341234'),
        ]);
        $this->call(ServiceSeeder::class);
        $this->call(BasicSeeder::class);
        $this->call(ContactSeeder::class);
        
        $this->call(MyWorldSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(WhoWorkSeeder::class);

    }
}
