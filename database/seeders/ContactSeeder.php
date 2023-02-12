<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'id' => '1',
            'facebook' => 'https://www.facebook.com/nabil7amada',
            'twitter' => NULL,
            'instagram' => 'https://instagram.com/nabil7amada',
            'linkedin' => NULL,
            'youtube' => NULL,
            'address' => 'Egypt - Giza - El Ayyat',
            'phone' => '+201118172639',
            'email' => 'Nabilhamada421@gmail.com'
        ]);
    }
}
