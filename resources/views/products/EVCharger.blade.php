@extends('layouts.app')

@section('title', 'Pila de Carga - Dahai Solar')

@section('styles')
<link href="{{ asset('css/products.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="main product-ev-charger">
    <div class="t">PILA DE CARGA</div>
    <div class="t2">
        Aportar su granito de arena al verde
    </div>
    <div class="des">
        Un enfoque innovador y eficiente es conectar su sistema fotovoltaico a un cargador de automóvil eléctrico. 
        De esta manera, ya no tendrá que pagar por cargar su automóvil eléctrico.
    </div>
    <div class="dt">
        FILTRAR PRODUCTOS
    </div>
    
    <div class="list">
        @foreach($products as $product)
        <a href="{{ route('products.show', $product->id) }}" class="product-item">
            <div class="pic">
                <img src="{{ asset($product->image ? 'storage/'.$product->image : 'images/default-product.jpg') }}" 
                     alt="{{ $product->name }}">
            </div>
            <div class="txt">
                <p class="name">{{ $product->name }}</p>
                <p class="tag">{{ $product->short_description ?? 'Cargador de vehículos eléctricos de alta eficiencia' }}</p>
                <div class="btn">SOLICITAR PRECIO</div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection