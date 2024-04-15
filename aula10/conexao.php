<?php

class Conexao {

    static function obterConexao(){
         $url = "mysql:host=localhost;dbname=primeiro";
         $usuario = "root";
         $senha = "";
        try {

         $pdo = new PDO($url, $usuario, $senha);    
         // https://www.php.net/manual/en/pdo.setattribute.php
         $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            error_log($e->getMessage,0);
            throw $e;
        }
         return $pdo;
    }

}