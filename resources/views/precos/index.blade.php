@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tabela de Preços</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Serviço</th>
                <th>Preço (Kz)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($precos as $preco)
                <tr>
                    <td>{{ $preco->servico }}</td>
                    <td>
                        @if($preco->servico == 'Taxa de Serviço (20%)')
                            {{ $preco->preco * 100 }}%
                        @else
                            {{ number_format($preco->preco, 2, ',', '.') }} Kz
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
