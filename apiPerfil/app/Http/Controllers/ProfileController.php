<?php

// ProfileController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show()
    {
        $profile = Profile::with('frameworks', 'hobbies')->first(); // Eager loading para cargar relaciones
        return response()->json($profile);
    }
}