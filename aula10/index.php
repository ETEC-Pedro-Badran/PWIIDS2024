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
        $produto = new Produto(0,"","",null);
        require "produto.form.php"; 
    } else if ($operacao=="alterar") {
        $id = $_GET["id"];
        $dao = new ProdutoDAO();
        $produto = $dao->obter($id);
        require "produto.form.php";         
    } else if ($operacao=="excluir") {
        $id = $_GET["id"];
        $dao = new ProdutoDAO();
        $produto = $dao->excluir($id);
        header("Location: /");
        die();
    } else {
        require "produto.list.php"; 
    }
} else if ($method=='POST') {
    if ($_POST["id"]>0) {
        $dao = new ProdutoDAO();
        $produto = $dao->obter($_POST["id"]);
        $produto->setNomePreco($_POST["nome"],$_POST["preco"]);
    } else {
        $produto = new Produto($_POST["id"],$_POST["nome"],$_POST["preco"],null);
    }

    if (!empty($_FILES["imagem"]['name'])) {
        $tmp = $_FILES["imagem"]['tmp_name'];
        $name = $_FILES["imagem"]['name'];
        $partes = explode("\php",$tmp);
        $partesTmp = explode(".",$partes[1]);
        $partesNome = explode(".",$name);
        $extensao = $partesNome[1];
        $dest = "img/".$partesTmp[0].".".$extensao;
        //error_log($tmp);
        //error_log($name);
        //error_log(print_r($partes,true));
        //error_log(print_r($partesTmp,true));
        //error_log(print_r($partesNome,true));
        //error_log($dest);
        move_uploaded_file($tmp, $dest);
        $produto->imagem = $dest;
    }

    if ($produto->getId()>0) {
       $dao->alterar($produto);
    } else {
       $dao->inserir($produto);
    }
   
    header('Location: /');
    die();
}

require "footer.php";   
        


