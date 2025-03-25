<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
</head>
<body>
    <h1>Agregar Producto</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label>Nombre:</label><input type="text" name="name"><br>
        <label>Código de Barras:</label><input type="text" name="barcode"><br>
        <label>Precio:</label><input type="number" step="0.01" name="price"><br>
        <label>Stock:</label><input type="number" name="stock"><br>
        <label>Categoría:</label><input type="text" name="category"><br>
        <button type="submit">Crear Producto</button>
    </form>
</body>
</html>
