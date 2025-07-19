<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(LoginRequest $request): RedirectResponse
    {
        // Validar y autenticar al usuario
        $request->authenticate();
        
        // Regenerar la sesión por seguridad
        $request->session()->regenerate();

        // Obtener el usuario autenticado
        $user = auth()->user();

        // Redirección basada en el rol
        if ($user->role_id == 1) { // Asumiendo que 1 es admin
            return redirect()->intended(route('admin.dashboard'))
                   ->with('success', 'Bienvenido, Administrador ' . $user->name);
        }

        // Verificar si el usuario tiene un carrito activo
        if (session()->has('cart')) {
            return redirect()->intended(route('checkout'))
                   ->with('info', 'Continúa con tu compra, ' . $user->name);
        }

        // Redirección por defecto para usuarios normales
        return redirect()->intended(route('home'))
               ->with('success', 'Bienvenido de nuevo, ' . $user->name);
    }
}
