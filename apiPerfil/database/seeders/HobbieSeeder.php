<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Hobbie;

class HobbieSeeder extends Seeder
{
    public function run()
    {
        Hobbie::create([
            'profile_id' => 1, // Asigna el perfil al que pertenece este hobbie
            'Name' => 'Ciclismo',
            'Description' => 'Ir a varios destinos en bicicleta, practicar trucos basicos como andar sin manos, cargado en un solo pedal, ejercitando equilibro',
        ]);

        Hobbie::create([
            'profile_id' => 1, // Asigna el perfil al que pertenece este hobbie
            'Name' => 'Deportes en General',
            'Description' => 'Me gusta jugar partidos amistosos de cualquier deporte, por que lo encuentro entretenido y tambien por la experiencia que gano al practicarlo',
        ]);

        Hobbie::create([
            'profile_id' => 1, // Asigna el perfil al que pertenece este hobbie
            'Name' => 'Tech rabbit hole',
            'Description' => 'Ver videos de divulgadores cientificos en youtube mayormente para enterarme del estado del arte de diversas areas de la tecnologia',
        ]);

        Hobbie::create([
            'profile_id' => 1, // Asigna el perfil al que pertenece este hobbie
            'Name' => 'Rocket League',
            'Description' => 'Practicar la ganancia de control en el juego, practicar trucos',
        ]);

        // Agrega más hobbies según sea necesario
    }
}
