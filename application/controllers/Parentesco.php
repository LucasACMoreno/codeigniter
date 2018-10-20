<?php

class Parentesco extends CI_Controller {

	public function index() {
		//interligando o controller ao model Parentesco( sabe que o model existe)
		$this->load->model('ParentescoModel');

		//recebe todos os dados da tabela
		$retorno_busca = $this->ParentescoModel->SelecionaTodos();
		//var_dump($retorno_busca);
		$pacote = array(
			'dados_tabela'=>$retorno_busca,
			'pagina'=>'parentesco/index.php',
			'titulo'=>'Manutenção de Parentesco' 
		);

		$this->load->view('index', $pacote);
	}
	
	public function Novo() {
		$pacote = array(
			'titulo'=>'Cadastro de novo Parentesco',
			'pagina'=>'parentesco/novo.php'
		);
		
		$this->load->view('index', $pacote);
	}
	
	public function salvar() {
		$this->load->model('ParentescoModel');
		$this->ParentescoModel->descricao = $_POST['descricao'];
		$this->ParentescoModel->incluir();

	}

	//TELA EXCLUIR
	public function NovoExcluir($idparentesco) {//novo
		$this->load->model('ParentescoModel');
		$parentesco = $this->ParentescoModel->encontrarid($idparentesco);
		$pacote = array(
			'parentesco'=>$parentesco,
			'titulo'=>'Excluir Parentesco',
			'pagina'=>'parentesco/excluir.php'
		);		
		$this->load->view('index', $pacote);
	}

	public function excluir($idparentesco) {//novo
		//var_dump($idparentesco);
		//exit;
		$this->load->model('ParentescoModel');
		$this->ParentescoModel->idparentesco = $_POST['idparentesco'];
		$this->ParentescoModel->excluir($idparentesco);
	}
	
	//TELA UPDATE
	public function NovoEditar($idparentesco) {
		$this->load->model('ParentescoModel');
		$parentesco = $this->ParentescoModel->encontrarid($idparentesco);
		$pacote = array(
			'parentesco'=>$parentesco,
			'titulo'=>'Editar Parentesco',
			'pagina'=>'parentesco/editar.php'
		);
		
		$this->load->view('index', $pacote);
	}


	public function editar($idparentesco) {
		//var_dump($idparentesco);
		//exit;
		$this->load->model('ParentescoModel');
		$this->ParentescoModel->descricao = $_POST['descricao'];
		$this->ParentescoModel->atualizar($idparentesco);
	}

}

?>