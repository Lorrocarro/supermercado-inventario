<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inventario de Productos</title>
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Lista de Productos</h1>
    
    <!-- Formulario de búsqueda -->
    <form method="GET" action="{{ route('products.search') }}" class="d-flex mb-3">
        <input type="text" name="query" class="form-control me-2" placeholder="Buscar productos...">
        <button class="btn btn-outline-primary">Buscar</button>
    </form>

    <!-- Tabla de productos -->
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código de Barras</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->barcode }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category }}</td>
                    <td>
                        <!-- Botón de editar -->
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-primary">Editar</a>
                        <!-- Formulario para eliminar -->
                        <form method="POST" action="{{ route('products.destroy', $product) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>

    <!-- Mensajes de éxito y error -->
    @if(session('success'))
        <div class="alert alert-success mt-4">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>
