<?php

class Venda{

    private $idVenda;
    private $idCliente;
    private $idVeiculo;
    private $idUsuario;
    private $valor;
    private $data;

public function getIdVenda(){
		return $this->idVenda;
	}

	public function setIdVenda($idVenda){
		$this->idVenda = $idVenda;
	}

	public function getIdCliente(){
		return $this->idCliente;
	}

	public function setIdCliente($idCliente){
		$this->idCliente = $idCliente;
	}

	public function getIdVeiculo(){
		return $this->idVeiculo;
	}

	public function setIdVeiculo($idVeiculo){
		$this->idVeiculo = $idVeiculo;
	}

	public function getIdUsuario(){
		return $this->idUsuario;
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}


}