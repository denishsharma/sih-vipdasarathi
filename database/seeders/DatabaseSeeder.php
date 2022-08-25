<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DisasterType;
use Illuminate\Database\Seeder;

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

        \App\Models\User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'mobile' => '+966123456789',
            'signature' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => \Hash::make('12345678'),
        ]);

        \App\Models\DisasterType::create([
            'name' => 'Flood',
            'signature' => 'flood',
        ]);

        \App\Models\DisasterType::create([
            'name' => 'Earthquake',
            'signature' => 'earthquake',
        ]);

        \App\Models\DisasterType::create([
            'name' => 'Fire',
            'signature' => 'fire',
        ]);

        \App\Models\DisasterType::create([
            'name' => 'Drought',
            'signature' => 'drought',
        ]);

        \App\Models\TaskType::factory(10)->create();
    }
}
