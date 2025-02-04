<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Relatórios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Relatórios de Viaturas</h1>
        <table class="table table-bordered mt-4">
            <tr>
                <th>Total de Viaturas</th>
                <td>{{ $totalViaturas }}</td>
            </tr>
            <tr>
                <th>Viaturas Concluídas</th>
                <td>{{ $concluidas }}</td>
            </tr>
            <tr>
                <th>Viaturas por Concluir</th>
                <td>{{ $porConcluir }}</td>
            </tr>
            <tr>
                <th>Viaturas Atendidas no Último Mês</th>
                <td>{{ $atendidasUltimoMes }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
