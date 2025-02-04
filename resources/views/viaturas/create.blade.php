@extends('layouts.app')

@section('title', 'Registrar Viatura')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Registrar Nova Viatura</h2>

    <form action="{{ route('viaturas.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label>Marca:</label>
                <input type="text" name="marca" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>Modelo:</label>
                <input type="text" name="modelo" class="form-control" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <label>Cor:</label>
                <input type="text" name="cor" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label>Tipo:</label>
                <input type="text" name="tipo" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label>Estado:</label>
                <input type="text" name="estado" class="form-control" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label>Tipo de Avaria:</label>
                <input type="text" name="tipo_avaria" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>Código de Validação:</label>
                <input type="text" name="codigo_validacao" class="form-control" required>
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-3">Registrar</button>
    </form>
</div>
@endsection
