<?php
require_once '../control/conexao.php';
class UsuarioDAO{
    private $con;
    function __construct(){
        $this->con=Conexao::conectar();
    }

    function insere(Usuario $u){
        $sql="insert into usuario (id_tipo_usuario,nome,cpf,telefone,email)".
            "values(?,?,?,?,?)";
        $stmt=$this->con->con->prepare($sql);
        $stmt->bindValue(1, $u->getIdTipousuario(),PDO::PARAM_STR);
        $stmt->bindValue(2, $u->getNome());
        $stmt->bindValue(3, $u->getCpf());
        $stmt->bindValue(4, $u->getTelefone());
        $stmt->bindValue(4, $u->getEmail());
        try{
            $stmt->execute();
            header("Location:../view/cadUsuario.php?msg=1");
        }catch(PDOException $e){
            echo "Mensagem de erro :" .$e->getMessage();
        }    
    }
    function buscaPorId($cod){
        $sql="select * from usuario where id_usuario=".$cod;
        $result= $this->con->query($sql);
        $usuario = $result->fetchObject("Usuario");
        return $usuario;
    }
}