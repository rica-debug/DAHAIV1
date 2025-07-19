<h1>{{ $product->name }}</h1>
<p>Categoría: {{ $product->category }}</p>
<p>{{ $product->description }}</p>
<p>Precio: ${{ number_format($product->price, 2) }}</p>

<a href="{{ url()->previous() }}">Volver atrás</a>