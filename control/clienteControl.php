<?php
require_once '../model/cliente.php';
require_once '../dao/clienteDAO.php';
                     

class ClienteControl{

    private $dao;
    private $acao;
    
    

    function verificaAcao(){
        
        switch ($this->acao){
            case 1:
                $this->preparaInsercao();
                
                break;
            case 2:
                $this->preparaBuscaId();
                break;    
        }
    }
    
    function preparaInsercao(){
        $c = new Cliente();
        $c->setNome($_POST["nome"]);
        $c->setEmail($_POST["email"]);
        $c->setCpf($_POST["cpf"]);
        $c->setTelefone($_POST["telefone"]);
        $this->dao->insere($c);
    }
    function preparaBuscaPorId(){
        if($_REQUEST["cod"] !=""){
            $user= $this->dao->buscaPorId($_REQUEST["cod"]);
            echo $user->getNome;
        }else{
            echo "Dados Obrigatorio";
        }
    }
}    
new ClienteControl(); 

?>