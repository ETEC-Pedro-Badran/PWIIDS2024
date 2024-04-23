<?php
class Produto {
    private $id;
    private $nome;
    private $preco;

    function __construct($id, $nome, $preco){
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }
    
    function toString(){
        return $this->id." ".$this->nome." ".$this->preco;
    }
    function getId(){
        return $this->id;
    }

    function getNome(){
        return $this->nome;
    }
    function getPreco(){
        return $this->preco;
    }


    

}