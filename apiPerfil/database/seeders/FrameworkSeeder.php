<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Framework;

class FrameworkSeeder extends Seeder
{
    public function run()
    {
        Framework::create([
            'profile_id' => 1, // Asigna el perfil al que pertenece este framework
            'Name' => 'Laravel',
            'Level' => 'Principiante',
            'Year' => 2023,
        ]);

        Framework::create([
            'profile_id' => 1, // Asigna el perfil al que pertenece este framework
            'Name' => 'Javalin',
            'Level' => 'Principiante',
            'Year' => 2023,
        ]);

        Framework::create([
            'profile_id' => 1, // Asigna el perfil al que pertenece este framework
            'Name' => 'React',
            'Level' => 'Principiante',
            'Year' => 2023,
        ]);

        Framework::create([
            'profile_id' => 1, // Asigna el perfil al que pertenece este framework
            'Name' => 'React Native',
            'Level' => 'Principiante',
            'Year' => 2023,
        ]);

        // Agrega más frameworks según sea necesario
    }
}