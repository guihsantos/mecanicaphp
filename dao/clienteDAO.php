<?php
require_once '../control/conexao.php';
class ClienteDAO{
    private $con;
    function __construct(){
        $this->con=Conexao::conectar();
    }

    function insere(Cliente $c){
        $sql="insert into cliente (nome,email,cpf,telefone)"."values(?,?,?,?)";
        $stmt=$this->con->prepare($sql);
        $stmt->bindValue(1, $c->getNome(),PDO::PARAM_STR);
        $stmt->bindValue(2, $c->getEmail());
        $stmt->bindValue(3, $c->getCpf());
        $stmt->bindValue(4, $c->getTelefone());
        try{
            $stmt->execute();
            header("Location:../view/cadCliente.php?msg=1");
        }catch(PDOExeption $e){
            echo "Mensagem de error :".$e->getMessage();
        }
    }

    function buscarPorId($cod){
        $sql="select * from cliente where id_usuario=".$cod;
        $result= $this->con->query($sql);
        $cliente = $result->fetchObject("Cliente");
        return $cliente;
    }
}
