<?php

class TipoUsuario{

    private $idTipoUsuario;
    private $descricao;
    private $permissao;

    public function getIdTipoUsuario(){
		return $this->idTipoUsuario;
	}

	public function setIdTipoUsuario($idTipoUsuario){
		$this->idTipoUsuario = $idTipoUsuario;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getPermissao(){
		return $this->permissao;
	}

	public function setPermissao($permissao){
		$this->permissao = $permissao;
	}

}