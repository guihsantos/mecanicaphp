<?php

class Cliente {

    private $idCliente;
    private $nome;
    private $email;
    private $cpf;
    private $telefone;


    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    public function getTelefone(){
        return $this->$telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

}
?>