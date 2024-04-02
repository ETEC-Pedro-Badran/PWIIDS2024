<?php
// obtém o conteúdo do arquivo como uma string
$conteudo = file_get_contents("dados.txt"); 
// echo print_r(explode(";",$conteudo),true);
//quebrando minha string a cada ENTER (\n) encontrado.
//gerando um vetor contendo cada linha do arquivo.
$dados = explode("\n",$conteudo);

//fazendo echo com cada uma das linhas do array
for ($contador=0;$contador<count($dados);$contador++) {
  //echo $dados[$contador]."<br>";
  $linha = explode(";",$dados[$contador]);


}
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
        <?php
for ($contador=0;$contador<count($dados);$contador++) {
  $linha = explode(";",$dados[$contador]);
        ?>

        <tr>
          <td> <?=$linha[0]?> </td>
          <td> <?=$linha[1]?> </td>
          <td> <?=$linha[2]?> </td>
          <td> <?=$linha[3]?> </td>
        </tr>

        <?php
}
        ?>


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
