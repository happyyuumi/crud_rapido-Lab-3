<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar producto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

  <h1>Editar producto</h1>

  <form method="POST" action="{{ route('products.update', $product) }}" class="mt-4">
    @csrf @method('PUT')

    <div class="mb-3">
      <label class="form-label">Descripción</label>
      <input type="text" name="description" class="form-control" value="{{ $product->description }}" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Precio</label>
      <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Stock</label>
      <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
    </div>

    <button type="submit" class="btn btn-warning">Actualizar</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
  </form>
</body>
</html>
