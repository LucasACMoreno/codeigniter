<?php

class BeneficiosModel extends CI_Model{

	public $idbeneficios;
	public $descricao;
	public $ativo;

	public function SelecionaTodos(){
		$resultado = $this->db->get('beneficios');
		return $resultado->result();
	}

	public function Incluir(){
		$tabela = array(
				'descricao'=>$this->descricao,
				'ativo'=>$this->ativo
		);
		$this->db->insert('beneficios', $tabela);
		redirect('beneficios');
	}
	
	public function excluir($idbeneficios){
		$tabela = array(
				'idbeneficios'=>$this->idbeneficios
		);
		$this->db->where('idbeneficios', $idbeneficios);
		$this->db->delete('beneficios', $tabela);
		redirect('beneficios');
	}

	public function atualizar($idbeneficios){
		$tabela = array(
				'descricao'=>$this->descricao,
				'ativo'=>$this->ativo
		);
		$this->db->where('idbeneficios', $idbeneficios);
		$this->db->update('beneficios', $tabela);
		redirect('beneficios');
	}

	public function encontrarid($idbeneficios){
		$sql = $this->db->get_where('beneficios', ['idbeneficios'=>$idbeneficios]);
		$result = $sql->result();
		return $result[0];
	}

}

?>