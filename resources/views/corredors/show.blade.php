<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Corredor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Detalhes do Corredor</h1>
        <table class="table">

            <tr>
                <th>Nome:</th>
                <td>{{ $corredor->nome }}</td>
            </tr>
            <tr>
                <th>Sobrenome:</th>
                <td>{{ $corredor->sobrenome }}</td>
            </tr>
            <tr>
                <th>Número:</th>
                <td>{{ $corredor->numero }}</td>
            </tr>
            <tr>
                <th>Corridas:</th>
                <td>
                    @if ($corredor->corridas)
                        <ul>
                            @foreach ($corredor->corridas as $corrida)
                                <li>{{ $corrida->nome }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>Nenhuma corrida associada a este corredor.</p>
                    @endif
                </td>
            </tr>
        </table>
        <a href="{{ route('corredors.edit', $corredor->id) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('corredors.index') }}" class="btn btn-secondary">Voltar para a Lista</a>
        <a href="{{ route('corridas.create') }}" class="btn btn-success">Cadastrar Corrida</a>
        <a href="{{ route('corridas.destroy', $corredor->id) }}" class="btn btn-success">deletar corredor</a>
    </div>
</body>
</html>
