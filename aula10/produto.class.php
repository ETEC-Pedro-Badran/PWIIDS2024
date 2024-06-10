<?php
class Produto {
    private $id;
    private $nome;
    private $preco;
    public $imagem; // <<<<<<<<<<<<<<<

    function __construct($id, $nome, $preco, $imagem){
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->imagem = $imagem; // <<<<<<<<<<<<<
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

    function setNomePreco($nome, $preco){
        $this->nome = $nome;
        $this->preco= $preco;
    }
    

}