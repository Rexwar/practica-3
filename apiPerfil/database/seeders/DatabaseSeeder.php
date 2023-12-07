<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ProfileSeeder::class);
        $this->call(HobbieSeeder::class);
        $this->call(FrameworkSeeder::class);

        // Agrega más seeders según sea necesario
    }
}