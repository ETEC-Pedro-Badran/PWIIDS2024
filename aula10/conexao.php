<?php

class Conexao {

    static function obterConexao(){
         $url = "mysql:host=localhost;dbname=primeiro";
         $usuario = "root";
         $senha = "";
        try {

         $pdo = new PDO($url, $usuario, $senha);    
         
        } catch (PDOException $e){
            error_log($e->getMessage,0);
            throw $e;
        }
         return $pdo;
    }

}