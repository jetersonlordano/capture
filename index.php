<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Interessado</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background: linear-gradient(to right, #ddeefc, #f7faff);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 40px 20px;
    }

    .container {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      max-width: 700px;
      width: 100%;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #1a1a40;
    }

    form {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .full-width {
      grid-column: 1 / 3;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #333;
    }

    input,
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
    }

    button {
      grid-column: 1 / 3;
      padding: 12px;
      font-size: 16px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Cadastre-se para receber novidades</h1>
    <form action="save.php" method="POST">
      <div class="full-width">
        <label for="nome">Nome completo</label>
        <input type="text" id="nome" name="nome" required>
      </div>

      <div>
        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" required>
      </div>

      <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div>
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" required>
      </div>

      <div>
        <label for="data_nasc">Data de nascimento</label>
        <input type="date" id="data_nasc" name="data_nasc" required>
      </div>

      <div class="full-width">
        <label for="cidade">Cidade</label>
        <input type="text" id="cidade" name="cidade" required>
      </div>

      <div class="full-width">
        <label for="bairro">Bairro</label>
        <input type="text" id="bairro" name="bairro" required>
      </div>

      <div>
        <label for="rua">Rua</label>
        <input type="text" id="rua" name="rua" required>
      </div>


      <div>
        <label for="numero">Número da casa</label>
        <input type="text" id="numero" name="numero" required>
      </div>



      <div class="full-width">
        <label for="profissao">Profissão</label>
        <input type="text" id="profissao" name="profissao">
      </div>

      <div>
        <label for="tipo_pet">Tipo de pet</label>
        <input type="text" id="tipo_pet" name="tipo_pet">
      </div>

      <div>
        <label for="nome_pet">Nome do pet</label>
        <input type="text" id="nome_pet" name="nome_pet">
      </div>

      <div class="full-width">
        <label for="hobby">Hobby</label>
        <input type="text" id="hobby" name="hobby">
      </div>

      <div>
        <label for="cantor">Cantor favorito</label>
        <input type="text" id="cantor" name="cantor">
      </div>

      <div>
        <label for="heroi">Herói favorito</label>
        <input type="text" id="heroi" name="heroi">
      </div>

      <button type="submit">Enviar</button>
    </form>
  </div>
</body>

</html>