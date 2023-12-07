<?php

namespace App\Http\Controllers;

use App\Models\Framework;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FrameworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            Log::info('Index Request Received'); // Registro de recepción de solicitud

            $frameworks = Framework::all();

            return $frameworks;
        } catch (\Exception $e) {
            Log::error('Error in Index Method', ['error' => $e->getMessage()]); // Registro de error

            // Opcional: Puedes devolver una respuesta de error personalizada
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'Name' => 'required',
                'Level' => 'required',
                'Year' => 'required|integer',
            ]);

            // Establecer el ID del perfil antes de crear el Framework
            $data['Profile_id'] = 1; // Suponiendo que el campo en la base de datos se llama 'profile_id'
            
            $framework = Framework::create($data);

            return response()->json($framework, 201);
        } catch (ValidationException $e) {
            Log::error('Validation Error in Store Method', ['errors' => $e->getMessage()]);

            // Devolver los errores de validación en formato JSON
            return response()->json(['errors' => $e->getMessage()], 422);
        } catch (\Exception $e) {
            Log::error('Error in Store Method', ['error' => $e->getMessage()]);

            // Devolver un error genérico en formato JSON
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Framework $framework)
    {
        $data = $request->validate([
            'Name' => 'required',
            'Level' => 'required',
            'Year' => 'required|integer',
        ]);

        $framework->update($data);

        return response()->json($framework, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
