<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina - Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Oficina XYZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Parceiros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="{{ route('login') }}">Área Administrativa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Bem-vindo ao Portal da Oficina XYZ</h1>
        <p class="text-center">Aqui você pode encontrar informações sobre nossos serviços e parceiros.</p>

        <h2 class="mt-4">Nossos Serviços</h2>
        <ul class="list-group">
            @foreach ($servicos as $servico)
                <li class="list-group-item">{{ $servico->nome }} - R$ {{ number_format($servico->preco, 2, ',', '.') }}</li>
            @endforeach
        </ul>

        <h2 class="mt-4">Localização</h2>
        <p>Estamos localizados na Avenida Principal, 123, Cidade - País</p>
        
        <h2 class="mt-4">Parceiros</h2>
        <p>Trabalhamos com diversas empresas do setor automotivo para garantir qualidade e segurança.</p>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; 2025 Oficina XYZ - Todos os direitos reservados.
    </footer>
</body>
</html>
