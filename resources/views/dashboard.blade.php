@extends('layouts.app')

@section('title', 'Dashboard - Oficina Automotiva')

@section('content')

@php
    // Dados dummy para testes se as variáveis não estiverem definidas.
    $servico = $servicos ?? collect([
        (object)['nome' => 'Troca de Óleo', 'preco' => 45.00],
        (object)['nome' => 'Alinhamento', 'preco' => 30.00],
        (object)['nome' => 'Pintura', 'preco' => 200.00],
    ]);

    $viatura = $viaturas ?? collect([
        (object)[
            'id' => 1,
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'cor' => 'Preto',
            'tipo' => 'Sedan',
            'estado' => 'Em Serviço',
            'tipo_avaria' => 'Motor',
            'codigo_validacao' => strtoupper(\Illuminate\Support\Str::random(10))
        ],
        (object)[
            'id' => 2,
            'marca' => 'Honda',
            'modelo' => 'Civic',
            'cor' => 'Branco',
            'tipo' => 'Sedan',
            'estado' => 'Concluída',
            'tipo_avaria' => 'Elétrica',
            'codigo_validacao' => strtoupper(\Illuminate\Support\Str::random(10))
        ],
    ]);
@endphp

<!-- Hero Section com Imagem de Fundo -->
<div class="jumbotron jumbotron-fluid" style="background: url('https://source.unsplash.com/1600x600/?workshop,car') no-repeat center center; background-size: cover; height: 400px;">
    <div class="container h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.5);">
        <div class="text-center text-white">
            <h1 class="display-4">Bem-vindo à Oficina Automotiva</h1>
            <p class="lead">Excelência e qualidade para cuidar do seu veículo</p>
        </div>
    </div>
</div>
<div class="container">
    <h2>Bem-vindo, {{ Auth::user()->name }}!</h2>

    @if(Auth::user()->isAdmin())
        <h4>Painel do Administrador</h4>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Gerir Utilizadores</a>
        <a href="{{ route('viaturas.index') }}" class="btn btn-success">Gerir Viaturas</a>
    @endif

    @if(Auth::user()->isSecretario())
        <h4>Painel do Secretário</h4>
        <a href="{{ route('viaturas.index') }}" class="btn btn-success">Listar Viaturas</a>
    @endif

    @if(Auth::user()->isTecnico())
        <h4>Painel do Técnico</h4>
        <a href="{{ url('/tecnico/viaturas') }}" class="btn btn-info">Ver Viaturas Designadas</a>
    @endif

    @if(Auth::user()->isCliente())
        <h4>Painel do Cliente</h4>
        <a href="{{ url('/cliente/estado') }}" class="btn btn-warning">Consultar Estado da Viatura</a>
    @endif
</div>

<!-- Seção de Informações do Usuário e Serviços -->
<div class="container mt-5">
    <div class="row">
        <!-- Informações do Usuário -->
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h4>Informações do Usuário</h4>
                </div>
                <div class="card-body">
                    <p><strong>Nome:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                    @if(auth()->user()->document_path)
                        <p><strong>Documento:</strong> <a href="{{ Storage::url(auth()->user()->document_path) }}" target="_blank">Visualizar Documento</a></p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Serviços da Oficina -->
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success text-white">
                    <h4>Serviços da Oficina</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @forelse ($servicos as $servico)
                            <div class="col-md-4 mb-3">
                                <div class="card h-100">
                                    <img src="https://source.unsplash.com/400x300/?car,{{ urlencode($servico->nome) }}" class="card-img-top" alt="{{ $servico->nome }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $servico->nome }}</h5>
                                        <p class="card-text">{{ number_format($servico->preco, 2, ',', '.') }} €</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-center">Nenhum serviço disponível no momento.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Seção de Viaturas Cadastradas -->
<div class="container mt-5">
    <h2 class="mb-4">Viaturas Cadastradas</h2>
    <div class="row">
        
    </div>
</div>

@endsection
