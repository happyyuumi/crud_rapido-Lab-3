<!doctype html>
<html>
<head><meta charset="utf-8"><title>Nuevo producto</title></head>
<body>
<h1>Crear producto</h1>

<form method="POST" action="{{ route('products.store') }}">
  @csrf
  <label>Descripción:</label><br>
  <input type="text" name="description" required><br><br>

  <label>Precio:</label><br>
  <input type="number" step="0.01" name="price" required><br><br>

  <label>Stock:</label><br>
  <input type="number" name="stock" required><br><br>

  <button type="submit">Guardar</button>
  <a href="{{ route('products.index') }}">Cancelar</a>
</form>
</body>
</html>
