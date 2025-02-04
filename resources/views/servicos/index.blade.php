@extends('layouts.app')

@section('title', 'Lista de Serviços')

@section('content')
<div class="container mt-5">
    <h2>Lista de Serviços</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Serviço</th>
                <th>Preço</th>
            </tr>
            <!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script>
        function mostrarPreco(preco) {
            alert("Preço do serviço: " + preco + " Kz");
        }
    </script>
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            transition: 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Bem-vindo à Oficina Mecânica</h1>
        <p>Gerencie seus serviços e acompanhe suas viaturas com facilidade!</p>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="/images/carro1.jpg" class="card-img-top" alt="Serviços">
                    <div class="card-body">
                        <h5 class="card-title">Serviços</h5>
                        <p class="card-text">Veja os serviços disponíveis para sua viatura.</p>
                        <a href="#servicos" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/images/carro2.jpg" class="card-img-top" alt="Viaturas">
                    <div class="card-body">
                        <h5 class="card-title">Minhas Viaturas</h5>
                        <p class="card-text">Acompanhe o status da sua viatura na oficina.</p>
                        <a href="#" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/images/equipe.jpg" class="card-img-top" alt="Equipe">
                    <div class="card-body">
                        <h5 class="card-title">Nossa Equipe</h5>
                        <p class="card-text">Conheça os profissionais que cuidarão do seu veículo.</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção de Serviços -->
        <div id="servicos" class="mt-5">
            <h2 class="text-center">Nossos Serviços</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/troca_oleo.jpg" class="card-img-top" alt="Troca de Óleo">
                        <div class="card-body">
                            <h5 class="card-title">Troca de Óleo</h5>
                            <p class="card-text">Manutenção essencial para seu motor.</p>
                            <button onclick="mostrarPreco(5000)" class="btn btn-success">Ver Preço</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/revisao.jpg" class="card-img-top" alt="Revisão Geral">
                        <div class="card-body">
                            <h5 class="card-title">Revisão Geral</h5>
                            <p class="card-text">Verificação completa do veículo.</p>
                            <button onclick="mostrarPreco(15000)" class="btn btn-success">Ver Preço</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/pintura.jpg" class="card-img-top" alt="Pintura Completa">
                        <div class="card-body">
                            <h5 class="card-title">Pintura Completa</h5>
                            <p class="card-text">Renove o visual do seu carro.</p>
                            <button onclick="mostrarPreco(25000)" class="btn btn-success">Ver Preço</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


        </thead>
        @php
            // Se a variável não estiver definida, define como uma coleção vazia
            $servicos = $servicos ?? collect([]);
        @endphp

        <tbody>
            @foreach($servicos as $servico)
                <tr>
                    <td>{{ $servico->id }}</td>
                    <td>{{ $servico->nome }}</td>
                    <td>{{ number_format($servico->preco, 2, ',', '.') }} €</td>
                </tr>
        
            @endforeach
        </tbody>
    </table>
</div>
@endsection