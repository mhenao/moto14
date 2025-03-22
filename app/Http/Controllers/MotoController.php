<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Moto;

class MotoController extends Controller
{
    public function store(Request $request)
    {
        $moto = Moto::updateOrCreate(
            ['placa' => $request->placa], // Si la placa ya existe, actualiza
            [
                'dni' => $request->dni,
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'telefono' => $request->telefono,
                'correo' => $request->correo,
                'color' => $request->color,
                'modelo' => $request->modelo,
            ]
        );

        return response()->json(['message' => 'Moto guardada correctamente', 'moto' => $moto]);
    }

    public function index()
    {
        return response()->json(Moto::all());
    }
}
