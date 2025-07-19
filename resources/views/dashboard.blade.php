@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-xl font-semibold mb-4">Panel de Control</h2>
                <p>Bienvenido al área de administración</p>
                <a href="/test-private" class="text-blue-500 hover:underline">Probar ruta privada</a>
            </div>
        </div>
    </div>
</div>
@endsection