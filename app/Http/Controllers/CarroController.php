<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function getAllCarros()
    {
        $car = Carro::all();
        return response()->json($car);
    }

    public function getCarroById($id)
    {
        $car = Carro::find($id);
        if (!$car) {
            return response()->json(['message' => 'Carro no encontrado'], 404);
        }
        return response()->json($car);
    }
}
