<!doctype html>
<html>
<head><meta charset="utf-8"><title>Productos</title></head>
<body>
<h1>Lista de productos</h1>

@if(session('msg'))
  <p>{{ session('msg') }}</p>
@endif

<a href="{{ route('products.create') }}">➕ Nuevo producto</a>

<table border="1" cellpadding="5">
  <tr>
    <th>ID</th><th>Descripción</th><th>Precio</th><th>Stock</th><th>Acciones</th>
  </tr>
  @foreach($products as $p)
  <tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->description }}</td>
    <td>{{ $p->price }}</td>
    <td>{{ $p->stock }}</td>
    <td>
      <a href="{{ route('products.show', $p) }}">Ver</a> |
      <a href="{{ route('products.edit', $p) }}">Editar</a> |
      <form method="POST" action="{{ route('products.destroy', $p) }}" style="display:inline">
        @csrf @method('DELETE')
        <button type="submit">Eliminar</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
</body>
</html>
