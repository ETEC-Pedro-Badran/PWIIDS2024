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
 
    // https://www.php.net/manual/pt_BR/pdostatement.fetchall.php
    function listar(){
        //conectar no banco de dados
        $conexao = Conexao::obterConexao();
        //criar consulta
        $sql = "SELECT id, nome, preco FROM Produto";
        //preparar a consulta
        $preparado = $conexao->prepare($sql);
        //executar    
        $preparado->execute();
        //obter o resultados
        $resposta = $preparado->fetchAll();
        
        //convertendo o resultado em Array para um array de Produtos.
        $produtos = array(); 
        foreach($resposta as $pro){
           array_push($produtos,new Produto($pro['id'], $pro['nome'], $pro['preco']));
        }
        //retornar os resultados
        return $produtos;
    }

    function alterar(Produto $produto){
        //conectar ao banco de dados
       $conexao = Conexao::obterConexao(); 
       // preparar um sql de inserção
       $sql = "update produto set nome = :nome,preco = :preco where id = :id";
       $declaracao = $conexao->prepare($sql);
       // atribuir o valor dos atributos de produto aos
       //parametros da instrução sql
       $declaracao->bindValue(":id",$produto->getId());
       $declaracao->bindValue(":nome",$produto->getNome());
       $declaracao->bindValue(":preco",$produto->getPreco());
       //executar 
       $declaracao->execute();         
    }

    // https://www.php.net/manual/pt_BR/pdostatement.fetchall.php
    function obter($id){
        //conectar no banco de dados
        $conexao = Conexao::obterConexao();
        //criar consulta
        $sql = "SELECT id, nome, preco FROM Produto where id = :id";
        //preparar a consulta
        $preparado = $conexao->prepare($sql);
        $preparado->bindValue("id",$id);
        //executar    
        $preparado->execute();
        //obter o resultados
        $resposta = $preparado->fetchAll();
        //convertendo o resultado em Array para um array de Produtos.
        $produtos = array(); 
        foreach($resposta as $pro){
           array_push($produtos,new Produto($pro['id'], $pro['nome'], $pro['preco']));
        }
        //retornar os resultados
        return $produtos[0];
    }


}