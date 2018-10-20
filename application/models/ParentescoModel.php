<?php

class ParentescoModel extends CI_Model{
	public $idparentesco;
	public $descricao;

	public function SelecionaTodos(){
		$resultado = $this->db->get('parentesco');
		return $resultado->result();
	}

	public function Incluir(){
		$tabela = array(
				'descricao'=>$this->descricao
		);
		$this->db->insert('parentesco', $tabela);
		redirect('parentesco');
	}
	
	public function Excluir($idparentesco){
		$tabela = array(
				'idparentesco'=>$this->idparentesco
		);
		$this->db->where('idparentesco', $idparentesco);
		$this->db->delete('parentesco', $tabela);
		redirect('parentesco');
	}

	public function atualizar($idparentesco){
		$tabela = array(
				'descricao'=>$this->descricao
		);
		$this->db->where('idparentesco', $idparentesco);
		$this->db->update('parentesco', $tabela);
		redirect('parentesco');
	}

	public function encontrarid($idparentesco){
		$sql = $this->db->get_where('parentesco', ['idparentesco'=>$idparentesco]);
		$result = $sql->result();
		return $result[0];
	}

}

?>