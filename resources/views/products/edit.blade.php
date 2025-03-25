<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')
        <label>Nombre:</label><input type="text" name="name" value="{{ $product->name }}"><br>
        <label>Código de Barras:</label><input type="text" name="barcode" value="{{ $product->barcode }}"><br>
        <label>Precio:</label><input type="number" step="0.01" name="price" value="{{ $product->price }}"><br>
        <label>Stock:</label><input type="number" name="stock" value="{{ $product->stock }}"><br>
        <label>Categoría:</label><input type="text" name="category" value="{{ $product->category }}"><br>
        <button type="submit">Actualizar Producto</button>
    </form>
</body>
</html>
