<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Corredor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Formulário de Cadastro de Corredor</h1>
        <form action="{{ route('corredors.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="text" class ="form-control" id="sobrenome" name="sobrenome" required>
            </div>

            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="number" class="form-control" id="numero" name="numero" required>
            </div>
            <div class="dropdown">

                <select name="corrida_id" >
                    @foreach ($corridas as $corrida)
                <option value="{{ $corrida->id }}">{{"$corrida->name"}}</option>
@endforeach

            </select>
        </div>


            <button type="submit" class="btn btn-primary">Cadastrar Corredor</button>

            <a href="{{ route('corredors.index') }}" class="btn btn-secondary">Voltar para o Home</a>


        </form>
    </div>
</body>
</html>
