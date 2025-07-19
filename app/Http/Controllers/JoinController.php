<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function index()
    {
        return view('pages.join');
    }

    public function submit(Request $request)
    {
        // Lógica para procesar el formulario
        return redirect()->route('join')->with('success', 'Registro exitoso');
    }
}