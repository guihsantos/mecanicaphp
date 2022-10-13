<?php
require_once '../control/conexao.php';
class VeiculoDAO{
    private $con;
    function __construct(){
        $this->con=Conexao::conectar();
    }
    function insere(Veiculo $v){
        $sql="insert into veiculo (marca,modelo,ano,cor,valor)".
            "values (?, ?, ?, ?,?)";
        $stmt=$this->con->prepare($sql);
        $stmt->bindValue(1, $u->getMarca(),PDO::PARAM_STR);
        $stmt->bindValue(2, $u->getModelo());
        $stmt->bindValue(3, $u->getAno());
        $stmt->bindValue(4, $u->getCor());
        $stmt->bindValue(5, $u->getValor());
        
        try{
            $stmt->execute();
            header("Location:../view/cadveiculo.php?msg=1");
        }catch (PDOException $e){
            echo "Mensagem de erro :".$e->getMessage();
        }
    }
    function buscaPorId($cod){
        $sql="select * from veiculo where id_veiculo=".$cod;
        $result= $this->con->query($sql);
        $cliente = $result->fetchObject("Veiculo");
        return $veiculo;
    }
}
?>