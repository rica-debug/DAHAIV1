<h1>Productos: {{ $category }}</h1>

@foreach($products as $product)
    <div class="product">
        <h3>{{ $product->name }}</h3>
        <a href="{{ route('products.show', $product->id) }}">Ver detalles</a>
    </div>
@endforeach