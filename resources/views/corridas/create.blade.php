<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Corrida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Criar Corrida</h1>
        <form action="{{ route('corridas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome da Corrida</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label for="data" class="form-label">Data da Corrida</label>
                <input type="date" class="form-control" id="dataCorrida" name="dataCorrida" required>
            </div>

            <div class="mb-3">
                <label for="local" class="form-label">Local da Corrida</label>
                <input type="text" class="form-control" id="localCorrida" name="localCorrida" required>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Corrida</button>
            <a href="{{ route('corridas.index') }}" class="btn btn-secondary">Voltar para a Lista</a>
        </form>
    </div>
</body>
</html>
