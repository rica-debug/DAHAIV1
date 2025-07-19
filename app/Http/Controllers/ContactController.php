<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        // Lógica para procesar el formulario
        return redirect()->route('contact')->with('success', 'Mensaje enviado');
    }
}