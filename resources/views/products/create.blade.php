@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Producto</h1>
    
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        
        <div class="form-group">
            <label for="category">Categoría</label>
            <select class="form-control" id="category" name="category" required>
                <option value="solar_modules">Módulos Solares</option>
                <option value="inverters">Inversores</option>
                <option value="storage_solutions">Baterías</option>
                <option value="ev_chargers">Cargadores EV</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar Producto</button>
    </form>
</div>
@endsection