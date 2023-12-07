<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        Profile::create([
            'Name' => 'Rey',
            'Lastname' => 'Valdes Marangunic',
            'Email' => 'reyvaldesm@gmail.com',
            'City' => 'Calama',
            'Country' => 'Chile',
            'Summary' => 'Estudio Ingenieria civil en computacion e informática en la UCN, Antofagasta, he participado en proyectos de desarrollo de software con metodologias agiles como scrum, desarrollado prototipos de videojuegos en unity, Soy una persona resiliente, proactivo, atento, con ganas de mejorar dia a dia',
        ]);
    }
}
