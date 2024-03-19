<?php
// obtém o conteúdo do arquivo como uma string
$conteudo = file_get_contents("dados.txt"); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela com Bootstrap</title>
  <!-- Adicionando o CSS do Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Clientes</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Cidade</th>
          <th>Idade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>João</td>
          <td>Orlândia</td>
          <td>30</td>
        </tr>
        <!-- Adicione mais linhas conforme necessário -->
      </tbody>
    </table>
  </div>

  <!-- Adicionando o JavaScript do Bootstrap (opcional) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
