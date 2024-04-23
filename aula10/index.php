<?php
require_once "produto.class.php";
require_once "produto.dao.php";
$dao = new ProdutoDAO();


require "header.php"; 
$operacao = @$_GET['operacao'];

if ($operacao=="incluir") {
    require "produto.form.php"; 
} else {
    require "produto.list.php"; 
}


require "footer.php";   
        


