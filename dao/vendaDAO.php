<?php
require_once '../control/conexao.php';
class VendaDAO{
    private $con;
    function __construct(){
        $this->con=Conexao::conectar();
    }
    /*function atualizar($id){
        $sql="update venda set dataDevolucao=now() where idEmprestimo=".$id;
        $this->con->query($sql);
        header("Location:../view/devolucao.php");
    }*/

    function buscaVendaPorId($id){
        $sql= "select * from venda where idVenda=".+$id;
        $result= $this->con->query($sql);
        $venda = $result->fetchAll(PDO::FETCH_ASSOC);
        return $venda;
    }
    function inserirVenda(Venda $v){
        $sql="insert into venda(id_cliente,id_vendedor,id_veiculo,valor)  values(?,?,?,?) ";
        $stm=$this->con->prepare($sql);
        $stm->bindValue(1, $v->getIdCliente());
        $stm->bindValue(2, $v->getIdVendedor());
        $stm->bindValue(3, $v->getIdVeiculo());
        $stm->bindValue(4, $v->getValorVenda());
        try{
         $stm->execute();
        }
        catch(PDOException $e){
           echo "ERRO ao inserir venda<hr>".$e->getMessage(); 
        }
    }
}