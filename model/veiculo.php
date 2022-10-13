<?php

class Veiculo{

    private $idVeiculo;
    private $marca;
    private $modelo;
    private $ano;
    private $valor;
    private $cor;

    public function getIdVeiculo(){
		return $this->idVeiculo;
	}

	public function setIdVeiculo($idVeiculo){
		$this->idVeiculo = $idVeiculo;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getAno(){
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function getCor(){
		return $this->cor;
	}

	public function setCor($cor){
		$this->cor = $cor;
	}
}