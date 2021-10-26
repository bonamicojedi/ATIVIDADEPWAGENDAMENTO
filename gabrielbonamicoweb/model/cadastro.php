<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $id;
    private $nome;
    private $telefone;
    private $idade;
    private $data_contato;
    private $motivo;

    //Metodos Set
    public function setId($string){
        $this->id = $string;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setIdade($string){
        $this->idade = $string;
    }
    public function setData_contato($string){
        $this->data_contato = $string;
    }
    public function setMotivo($string){
        $this->motivo = $string;
    }

    //Metodos Get
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getData_contato(){
        return $this->data_contato;
    }
    public function getMotivo(){
        return $this->motivo;
    }

    public function incluir(){
        return $this->setAgendamentos($this->getNome(),$this->getTelefone(),$this->getIdade(),$this->getData_contato(),$this->getMotivo());
    }

    public function listar($id){
    	return $this->getAgendamentos($id);
    }
	
    public function editar(){
        return $this->updateAgendamentos($this->getId(),$this->getNome(),$this->getTelefone(),$this->getIdade(),$this->getData_contato(),$this->getMotivo());
    }
	
	public function excluir($id){
        return $this->deleteAgendamentos($id);
    }
}
?>