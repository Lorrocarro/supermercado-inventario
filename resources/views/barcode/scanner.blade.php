<!DOCTYPE html>
<html>
<head>
    <title>Lector de Códigos de Barras</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/quagga@0.12.1/dist/quagga.min.js"></script> <!-- Librería QuaggaJS -->
</head>
<body>
    <div class="container mt-5">
        <h1>Lector de Códigos de Barras</h1>
        
        <!-- Botón para activar el escáner -->
        <button id="start-scanner" class="btn btn-success mb-3">Activar Escáner</button>

        <!-- Contenedor para la cámara -->
        <div id="scanner-container" style="width: 100%; height: 300px; margin-bottom: 20px; display: none;"></div>

        <!-- Formulario -->
        <form method="POST" action="{{ route('barcode.process') }}">
            @csrf
            <div class="mb-3">
                <label for="barcode" class="form-label">Código de Barras</label>
                <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Escanea o escribe el código" autofocus required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <!-- Mensaje de éxito -->
        @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
        @endif
    </div>

    <script>
        // Activar el escáner cuando se haga clic en el botón
        document.getElementById('start-scanner').addEventListener('click', function() {
            const scannerContainer = document.getElementById('scanner-container');
            scannerContainer.style.display = 'block'; // Mostrar el contenedor de la cámara

            Quagga.init({
                inputStream: {
                    type: 'LiveStream',
                    target: scannerContainer, // Usar el contenedor como objetivo
                },
                decoder: {
                    readers: ['code_128_reader', 'ean_reader'] // Tipos de códigos soportados
                },
            }, function(err) {
                if (err) {
                    console.error(err);
                    alert('Error al iniciar el escáner. Por favor, revisa los permisos de la cámara.');
                    return;
                }
                Quagga.start(); // Inicia el escáner
            });

            // Detectar un código de barras
            Quagga.onDetected(function(result) {
                document.getElementById('barcode').value = result.codeResult.code; // Colocar el código escaneado en el input
                Quagga.stop(); // Detener el escaneo después de detectar
                scannerContainer.style.display = 'none'; // Ocultar el contenedor de la cámara
            });
        });
    </script>
</body>
</html>
