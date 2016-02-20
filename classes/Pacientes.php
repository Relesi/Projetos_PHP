<?php


class Pacientes{
	
	public $numeroMinhaConsulta;
	public $nomePaciente;
	
	public function setNomePaciente($nome = null){
		if (!is_null($nome)){
		}	
		
	}
	
	public function setNumeroConsulta($consulta = null){
		if (!is_null($consulta)){
			$this->numeroMinhaConsulta = $consulta;
		}else{
			return false;
		}
			
	}
	
	public function getFixa(){
		return "O atendimento e para o paciente:
		{$this->nomePaciente} e o numero de atendimento e :{$this->numeroMinhaConsulta}";
	}
	
	
}	

