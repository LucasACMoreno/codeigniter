<?php

class CoberturaModel extends CI_Model{

	public $idcobertura;
	public $descricao;

	public function SelecionaTodos(){
		$resultado = $this->db->get('cobertura');
		return $resultado->result();
	}

	public function Incluir(){
		$tabela = array(
				'descricao'=>$this->descricao
		);
		$this->db->insert('cobertura', $tabela);
		redirect('cobertura');
	}

	public function Excluir($idcobertura){
		$tabela = array(
				'idcobertura'=>$this->idcobertura
		);
		$this->db->where('idcobertura', $idcobertura);
		$this->db->delete('cobertura', $tabela);
		redirect('cobertura');
	}

	public function atualizar($idcobertura){
		$tabela = array(
				'descricao'=>$this->descricao
		);
		$this->db->where('idcobertura', $idcobertura);
		$this->db->update('cobertura', $tabela);

		redirect('cobertura');
	}

	public function encontrarid($idcobertura){
		$sql = $this->db->get_where('cobertura', ['idcobertura'=>$idcobertura]);
		$result = $sql->result();
		return $result[0];
	}
}

?>