<?php

$servidor = "localhost";
$banco = "aula09";
$usuario = "root";
$senha = '';

try { // bloco protegido
  //estabelece uma conexão  
  $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
  echo "Conexão realizada com sucesso!\n";

  //prepara uma consulta  
  $query = $pdo->query("select now() as data");
  //obtem os resultados da consulta
  $resultado = $query->fetch();
  //converte a data do banco de dados em data do PHP
  $data = strtotime($resultado['data']);
  //imprime a data formatada
  echo "Data do banco de dados ".date('d/m/Y h:i:s',$data);

  
} catch(PDOException $e) { // trata o erro caso houver.
  echo "Falha na conexão! ".$e->getMessage();
}

