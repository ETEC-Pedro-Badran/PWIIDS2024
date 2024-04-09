<?php
require_once "produto.class.php";
require_once "conexao.php";
require_once "produto.dao.php";

// instanciando,ou seja, criando os objetos da classe Produto
$banana = new Produto(null, "Banana",7.99);
$bolo = new Produto(null, "Bolo no Pote Sabores",12.99);

// criar um objeto da Classe DAO
$dao = new ProdutoDAO();
//executar a inserção no banco de dados através do objeto DAO
$dao->inserir($banana);
$dao->inserir($bolo);



