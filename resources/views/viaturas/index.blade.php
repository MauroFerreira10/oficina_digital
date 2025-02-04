@extends('layouts.app')

@section('title', 'Lista de Viaturas')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Viaturas Registradas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('viaturas.create') }}" class="btn btn-primary mb-3">Adicionar Nova Viatura</a>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Tipo de Avaria</th>
                <th>Código de Validação</th>
                <th>Ações</th>
            </tr>
        
        </tbody>
    </table>
</div>
@endsection