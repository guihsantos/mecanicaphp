<?php

class Conexao{

    private $con;
    static function conectar(){
        try{
            $con=new PDO('mysql:host=localhost;dbname=mecanicaphp',"mecanica","123456");
        }
        catch(PDOException $e){
            echo "Erro :".$e->getMessage();
        }
        return $con;
    }
}