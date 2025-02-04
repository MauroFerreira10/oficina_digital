<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>QR Code da Viatura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <h1>QR Code da Viatura</h1>
        <p>Nome da Oficina: Oficina XYZ</p>
        <p>Endereço: Avenida Principal, 123</p>
        <p>Data de Saída: {{ $viatura->updated_at->format('d/m/Y') }}</p>
        <div class="mt-3">
            {!! $qrCode !!}
        </div>
        <a href="/" class="btn btn-primary mt-4">Voltar</a>
    </div>
</body>
</html>
