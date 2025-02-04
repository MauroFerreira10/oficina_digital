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
