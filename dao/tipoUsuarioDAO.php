<?php
require_once '../control/conexao.php';
class TipoUsuarioDAO{
    private $con;
    function __construct(){
        $this->con=Conexao::conectar();
    }
    function inserir(TipoUsuario $tu){
        $sql="insert into tipousuario (descricao,permissao) values ".
        "('".$tu->getDescricao()."','".$tu->getPermissao()."')";
        if($this->con->query($sql))
            header("Location:../view/cadTipoUsuario.php?msg=1");
    }
    
    function listaGeral(){
        $sql="select * from tipousuario order by descricao asc";
        $result= $this->con->query($sql);
        $tipos = $result->fetchAll(PDO::FETCH_OBJ);
        return $tipos;
       
    }
}