
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Corredores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Lista de Corredores</h1>
        <table class="table table-striped">
            <thead>
                <tr>

                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Número</th>
                    <th>Corrida</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($corredors as $corredor)
                <tr>

                    <td>{{ $corredor->nome }}</td>
                    <td>{{ $corredor->sobrenome }}</td>
                    <td>{{ $corredor->numero }}</td>
                    <td>{{ $corredor->sobrenome }}</td>

                    <td> 

                        <a href="{{ route('corredors.edit', $corredor->id) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('corredors.show', $corredor->id) }}" class="btn btn-info">Ver o Corredor</a>


                    </td> @endforeach
                </tr>

            </tbody>
        </table>
        <a href="{{ route('corredors.create') }}" class="btn btn-info">Cadastrar Corredor</a>
        <a href="{{ route('corridas.create') }}" class="btn btn-success">Cadastrar corrida</a>
        <a href="{{ route('corredors.index') }}" class="btn btn-secondary">Voltar para o Home</a>
    </div>
</body>
</html>
