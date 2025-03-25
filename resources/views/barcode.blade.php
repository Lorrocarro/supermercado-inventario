<!DOCTYPE html>
<html>
<head>
    <title>Lector de Códigos de Barras</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Lector de Códigos de Barras</h1>
        <form method="POST" action="{{ route('barcode.process') }}">
            @csrf
            <div class="mb-3">
                <label for="barcode" class="form-label">Código de Barras</label>
                <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Escanea o escribe el código" autofocus required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif

    <script>
        // Enfocar el campo de texto automáticamente al cargar la página
        document.getElementById('barcode').focus();
    </script>
</body>
</html>
