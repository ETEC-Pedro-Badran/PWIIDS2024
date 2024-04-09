<?php
require_once "produto.class.php";
require_once "conexao.php";


class ProdutoDAO {


    function inserir(Produto $produto){
        //conectar ao banco de dados
       $conexao = Conexao::obterConexao(); 
       // preparar um sql de inserção
       $sql = "insert into produto (nome, preco) values (:nome, :preco)";
       $declaracao = $conexao->prepare($sql);
       // atribuir o valor dos atributos de produto aos
       //parametros da instrução sql
       $declaracao->bindValue(":nome",$produto->getNome());
       $declaracao->bindValue(":preco",$produto->getPreco());
       //executar 
       $declaracao->execute();         
    }
    
}