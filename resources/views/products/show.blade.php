<!doctype html>
<html>
<head><meta charset="utf-8"><title>Detalle producto</title></head>
<body>
<h1>Producto #{{ $product->id }}</h1>
<p><b>Descripción:</b> {{ $product->description }}</p>
<p><b>Precio:</b> {{ $product->price }}</p>
<p><b>Stock:</b> {{ $product->stock }}</p>

<a href="{{ route('products.index') }}">Volver</a>
</body>
</html>
