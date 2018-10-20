<?php

class Estado extends CI_Controller {

	public function index() {
		//interligando o controller ao model Parentesco( sabe que o model existe)
		$this->load->model('EstadoModel');

		//recebe todos os dados da tabela
		$retorno_busca = $this->EstadoModel->SelecionaTodos();
		//var_dump($retorno_busca);
		$pacote = array(
			'dados_tabela'=>$retorno_busca,
			'pagina'=>'estado/index.php',
			'titulo'=>'Manutenção de Estado' 
		);

		$this->load->view('index', $pacote);
	}
	
	//TELA CADASTRO
	public function Novo() {
		$pacote = array(
			'titulo'=>'Cadastro de novo Estado',
			'pagina'=>'estado/novo.php'
		);
		
		$this->load->view('index', $pacote);
	}
	
	public function salvar() {// USO PRA SALVAR TANTO NOVO REGISTRO COMO UMA ATUALIZAÇÃO
		$this->load->model('EstadoModel');

		$this->EstadoModel->nome = $_POST['nome'];
		$this->EstadoModel->sigla = $_POST['sigla'];
		$this->EstadoModel->incluir();
	}

	//TELA EXCLUIR
	public function NovoExcluir($idestado) {//novo
		$this->load->model('EstadoModel');
		$estado = $this->EstadoModel->encontrarid($idestado);
		$pacote = array(
			'estado'=>$estado,
			'titulo'=>'Excluir Estado',
			'pagina'=>'estado/excluir.php'
		);		
		$this->load->view('index', $pacote);
	}

	public function excluir($idestado) {//novo
		//var_dump($idestado);
		//exit;
		$this->load->model('EstadoModel');
		$this->EstadoModel->idestado = $_POST['idestado'];
		$this->EstadoModel->excluir($idestado);
	}

	//TELA UPDATE
	public function NovoEditar($idestado) {
		$this->load->model('EstadoModel');
		$estado = $this->EstadoModel->encontrarid($idestado);
		$pacote = array(
			'estado'=>$estado,
			'titulo'=>'Editar Estado',
			'pagina'=>'estado/editar.php'
		);
		
		$this->load->view('index', $pacote);
	}


	public function editar($idestado) {
		//var_dump($idestado);
		//exit;
		$this->load->model('EstadoModel');
		$this->EstadoModel->nome = $_POST['nome'];
		$this->EstadoModel->sigla = $_POST['sigla'];
		$this->EstadoModel->atualizar($idestado);
	}


}
?>