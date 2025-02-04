<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Oficina')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts (ex.: Roboto) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 120px;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        footer {
            background: linear-gradient(45deg, #343a40, #212529);
            color: #fff;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
        }

        /* Botões customizados */
        .btn-custom {
            border-radius: 50px;
            padding: 10px 20px;
            font-weight: 500;
        }

        /* Hero Section */
        .hero {
            background: url('https://source.unsplash.com/1600x600/?workshop,car') no-repeat center center;
            background-size: cover;
            height: 500px;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <!-- Coloque seu logotipo em public/images/logo.png -->
                <img src="{{ asset('images/logo.png') }}" alt="Logo da Oficina">
                <span class="ms-2 fw-bold">Oficina Automotiva</span>
            </a>
            <div class="col-md-4">
                <div class="card">
                    <img src="/images/equipe.jpg" class="card-img-top" alt="Equipe">
                    <div class="card-body">
                        <h5 class="card-title">Nossa Equipe</h5>
                        <p class="card-text">Conheça os profissionais que cuidarão do seu veículo.</p>
                        
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            @guest
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrar</a></li>
                            @endguest
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('viaturas.index') }}">Viaturas</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('servicos.index') }}">Serviços</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; {{ date('Y') }} Oficina Automotiva. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>