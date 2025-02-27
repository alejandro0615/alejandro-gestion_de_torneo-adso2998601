<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;

class JugadorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'deporte' => 'required|string',
            'universidad' => 'required|string|max:255',
            'entrenador' => 'required|string|max:255',
        ]);

        Jugador::create([
            'nombre' => $request->nombre,
            'deporte' => $request->deporte,
            'universidad' => $request->universidad,
            'entrenador' => $request->entrenador,
        ]);

        return redirect()->back()->with('success', 'Jugador registrado correctamente');
    }
}