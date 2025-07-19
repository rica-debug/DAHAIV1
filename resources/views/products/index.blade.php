@extends('layouts.app')

@section('content')
<div class="container my-5">

    {{-- Encabezado --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-primary">📦 Listado de Productos</h1>
        <a href="{{ route('products.create') }}" class="btn btn-success shadow-sm px-4 py-2">
            ➕ Nuevo Producto
        </a>
    </div>

    {{-- Tabla de productos --}}
    <div class="table-responsive shadow-sm border rounded mb-4">
        <table class="table table-striped align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th>📛 Nombre</th>
                    <th>📝 Descripción</th>
                    <th>💲 Precio</th>
                    <th>🏷️ Categoría</th>
                    <th>⚙️ Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr class="text-center">
                    <td class="fw-semibold">{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->category->name ?? 'Sin categoría' }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-primary me-1">🔍 Ver</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning me-1">✏️ Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">🗑️ Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">No hay productos disponibles.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Enlaces a categorías --}}
    <div class="categories d-flex flex-wrap gap-3 justify-content-center">
        <a href="{{ route('products.solar-modules') }}" class="btn btn-outline-primary">🔆 Módulos Solares</a>
        <a href="{{ route('products.inverters') }}" class="btn btn-outline-secondary">⚡ Inversores</a>
        <a href="{{ route('products.storage-solutions') }}" class="btn btn-outline-success">🔋 Baterías</a>
        <a href="{{ route('products.ev-charger') }}" class="btn btn-outline-warning">🚗 Cargadores EV</a>
    </div>

</div>
@endsection
