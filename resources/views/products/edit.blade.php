<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Editar Producto</title>
</head>
<body>
<div class="container mt-4">
    <h1>Editar Producto</h1>
    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="barcode" class="form-label">Código de Barras</label>
            <input type="text" name="barcode" id="barcode" class="form-control" value="{{ $product->barcode }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoría</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ $product->category }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar Producto</button>
    </form>
</div>
</body>
</html>
