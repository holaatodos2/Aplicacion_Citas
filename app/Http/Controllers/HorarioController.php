<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    
    public function index()
    {
        $days = [
            'Lunes',
            'Martes',
            'Miercoles',
            'Jueves',
            'Viernes',
            'Sabado',
            'Domingo',
        ];

        return view('horarios.index', compact('days'));

        
    }

    public function store(Request $request)
    {
        
    }
}
