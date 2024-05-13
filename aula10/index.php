<?php
require_once "produto.class.php";
require_once "produto.dao.php";
$dao = new ProdutoDAO();


require "header.php"; 

$method = $_SERVER["REQUEST_METHOD"];
//var_dump($method);

if ($method=="GET") {
    $operacao = @$_GET['operacao'];
    $id = 0;
    if ($operacao=="incluir") {
        $produto = new Produto(0,"","");
        require "produto.form.php"; 
    } else if ($operacao=="alterar") {
        $id = $_GET["id"];
        $dao = new ProdutoDAO();
        $produto = $dao->obter($id);
        require "produto.form.php";         
    } else {
        require "produto.list.php"; 
    }
} else if ($method=='POST') {
    $produto = new Produto($_POST["id"],$_POST["nome"],$_POST["preco"]);
    
    if ($produto->getId()>0)     {
       $dao->alterar($produto);
    } else {
       $dao->inserir($produto);
    }
    header('Location: /');
    die();
}

require "footer.php";   
        


