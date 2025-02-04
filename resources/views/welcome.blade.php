@extends('layouts.app')

@section('title', 'Bem-vindo à Oficina Automotiva')

@section('content')

<!-- Hero Section -->
<div class="hero d-flex align-items-center justify-content-center">
    <div class="container text-center hero-content text-white">
        <h1 class="display-3 fw-bold">Bem-vindo à Oficina Automotiva</h1>
        <p class="lead">Cuidados especializados para o seu veículo com qualidade e segurança.</p>
        @guest
            <a href="{{ route('login') }}" class="btn btn-custom btn-primary me-2">Entrar</a>
            <a href="{{ route('register') }}" class="btn btn-custom btn-secondary">Registrar</a>
        @endguest
        @auth
            <a href="{{ route('dashboard') }}" class="btn btn-custom btn-primary">Ir para o Dashboard</a>
        @endauth
    </div>
</div>

<!-- Seção de Serviços -->
<div class="container my-5">
    <h2 class="text-center mb-4">Nossos Serviços</h2>
    <div class="row">
        <!-- Card de Serviço: Troca de Óleo -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://source.unsplash.com/400x300/?oil,car" class="card-img-top" alt="Troca de Óleo">
                <div class="card-body">
                    <h5 class="card-title">Troca de Óleo</h5>
                    <p class="card-text">Mantenha o seu motor em perfeito funcionamento com nossa troca de óleo especializada.</p>
                </div>
            </div>
        </div>
        <!-- Card de Serviço: Alinhamento -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://source.unsplash.com/400x300/?alignment,car" class="card-img-top" alt="Alinhamento">
                <div class="card-body">
                    <h5 class="card-title">Alinhamento</h5>
                    <p class="card-text">Serviço de alinhamento e balanceamento para maior segurança e conforto na direção.</p>
                </div>
            </div>
        </div>
        <!-- Card de Serviço: Pintura -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://source.unsplash.com/400x300/?car,painting" class="card-img-top" alt="Pintura">
                <div class="card-body">
                    <h5 class="card-title">Pintura Automotiva</h5>
                    <p class="card-text">Renove a aparência do seu veículo com nossa pintura automotiva de alta qualidade.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Seção de Depoimentos (opcional) -->
<div class="container my-5">
    <h2 class="text-center mb-4">O que Nossos Clientes Dizem</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card p-3 shadow-sm">
                <p class="card-text">"Atendimento excepcional e serviços de alta qualidade. Recomendo a todos!"</p>
                <h6 class="fw-bold">– João Silva</h6>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-3 shadow-sm">
                <p class="card-text">"Profissionais qualificados e atendimento super atencioso. Meu carro nunca esteve tão bem!"</p>
                <h6 class="fw-bold">– Maria Oliveira</h6>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card p-3 shadow-sm">
                <p class="card-text">"Serviço rápido e confiável. Fiquei muito satisfeito com o trabalho realizado."</p>
                <h6 class="fw-bold">– Carlos Pereira</h6>
            </div>
        </div>
    </div>
</div>

<!-- Seção de Contato com Imagem de Fundo -->
<div class="jumbotron jumbotron-fluid" style="background: url('https://source.unsplash.com/1600x400/?contact,office') no-repeat center center; background-size: cover; height: 300px;">
    <div class="container h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4);">
        <div class="text-center text-white">
            <h2>Entre em Contato</h2>
            <p>Fale conosco para saber mais sobre nossos serviços e agendar uma visita.</p>
            <a href="mailto:contato@oficina.com" class="btn btn-custom btn-outline-light">Enviar Email</a>
        </div>
    </div>
</div>

@endsection
