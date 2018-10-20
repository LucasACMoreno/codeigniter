<?php

class Cobertura extends CI_Controller {

	public function index() {
		//interligando o controller ao model Parentesco( sabe que o model existe)
		$this->load->model('CoberturaModel');

		//recebe todos os dados da tabela
		$retorno_busca = $this->CoberturaModel->SelecionaTodos();
		//var_dump($retorno_busca);
		$pacote = array(
			'dados_tabela'=>$retorno_busca,
			'pagina'=>'cobertura/index.php',
			'titulo'=>'Manutenção de Cobertura' 
		);

		$this->load->view('index', $pacote);
	}
	
	public function Novo() {
		$pacote = array(
			'titulo'=>'Cadastro de novo Cobertura',
			'pagina'=>'cobertura/novo.php'
		);
		
		$this->load->view('index', $pacote);
	}
	
	public function salvar() {
		$this->load->model('CoberturaModel');
		$this->CoberturaModel->descricao = $_POST['descricao'];
		$this->CoberturaModel->incluir();

	}
	
		//TELA EXCLUIR
	public function NovoExcluir($idcobertura) {//novo
		$this->load->model('CoberturaModel');
		$cobertura = $this->CoberturaModel->encontrarid($idcobertura);
		$pacote = array(
			'cobertura'=>$cobertura,
			'titulo'=>'Excluir Cobertura',
			'pagina'=>'cobertura/excluir.php'
		);		
		$this->load->view('index', $pacote);
	}

	public function excluir($idcobertura) {//novo
		//var_dump($idcobertura);
		//exit;
		$this->load->model('CoberturaModel');
		$this->CoberturaModel->idcobertura = $_POST['idcobertura'];
		$this->CoberturaModel->excluir($idcobertura);
	}
	
		//TELA UPDATE
	public function NovoEditar($idcobertura) {
		$this->load->model('CoberturaModel');
		$cobertura = $this->CoberturaModel->encontrarid($idcobertura);
		$pacote = array(
			'cobertura'=>$cobertura,
			'titulo'=>'Editar Cobertura',
			'pagina'=>'cobertura/editar.php'
		);
		
		$this->load->view('index', $pacote);
	}


	public function editar($idcobertura) {
		//var_dump($idcobertura);
		//exit;
		$this->load->model('CoberturaModel');
		$this->CoberturaModel->descricao = $_POST['descricao'];
		$this->CoberturaModel->atualizar($idcobertura);
	}
}

?>