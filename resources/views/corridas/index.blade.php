<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Formulário de Registro</title>
  <style>
    /* Adicionando uma borda ao formulário */
    .custom-form {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 10px;
    }

    /* Centralizando o título e o botão */
    .center-text {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6 custom-form">
        <h2 class="center-text">Registro</h2>
        <form>
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
          </div>
          <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Digite seu login">
          </div>
          <div class="mb-3 center-text"> <!-- Centralize o botão no div pai -->
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
