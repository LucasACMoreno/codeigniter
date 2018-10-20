<?php

class EstadoModel extends CI_Model{
	public $idestado;
	public $nome;
	public $sigla;

	public function SelecionaTodos(){
		$resultado = $this->db->get('estado');
		return $resultado->result();
	}

	public function Incluir(){
		$tabela = array(
				'nome'=>$this->nome,
				'sigla'=>$this->sigla
		);
		$this->db->insert('estado', $tabela);
		redirect('estado');
	}

	public function Excluir($idestado){
		$tabela = array(
				'idestado'=>$this->idestado
		);
		$this->db->where('idestado', $idestado);
		$this->db->delete('estado', $tabela);
		redirect('estado');
	}

	public function atualizar($idestado){
		$tabela = array(
				'nome'=>$this->nome,
				'sigla'=>$this->sigla
		);
		$this->db->where('idestado', $idestado);
		$this->db->update('estado', $tabela);

		redirect('estado');
	}

	public function encontrarid($idestado){
		$sql = $this->db->get_where('estado', ['idestado'=>$idestado]);
		$result = $sql->result();
		return $result[0];
	}

}

?>