<?php

class Beneficios extends CI_Controller {

	public function index() {
		//interligando o controller ao model Parentesco( sabe que o model existe)
		$this->load->model('BeneficiosModel');

		//recebe todos os dados da tabela
		$retorno_busca = $this->BeneficiosModel->SelecionaTodos();
		//var_dump($retorno_busca);
		$pacote = array(
			'dados_tabela'=>$retorno_busca,
			'pagina'=>'beneficios/index.php',
			'titulo'=>'Manutenção de Beneficios' 
		);

		$this->load->view('index', $pacote);
	}
	
	public function Novo() {
		$this->load->library('session');
		$pacote = array(
			'titulo'=>'Cadastro de novo Beneficio',
			'pagina'=>'beneficios/novo.php'
		);
		
		$this->load->view('index', $pacote);
	}
	
	
	public function salvar() {
		$this->load->library('session');
		$this->load->model('BeneficiosModel');
		if(isset($_POST['ativo'])){
		   $ativo = 1;
		}else{
		   $ativo = 0;
		}
		
		$this->db->select('descricao');
		$this->db->where('descricao', $this->input->post('descricao'));
		$retorno = $this->db->get('beneficios')->num_rows();
		
		if($retorno > 0 ){
			$this->session->set_flashdata('campo_igual', 'Já existe esse valor cadastrado');
			$this->session->flashdata('campo_igual');
			redirect("beneficios/Novo");
		}
		if(empty(trim($_POST['descricao']))){
			$this->session->set_flashdata('campo_espace', 'O campo não aceita apenas espaço');
			$this->session->flashdata('campo_espace');
			redirect("beneficios/Novo");	
		}
		if(empty($_POST['descricao'])){
			$this->session->set_flashdata('campo_vazio', 'O campo está vazio');
			$this->session->flashdata('campo_vazio');
			redirect("beneficios/Novo");	
		}
		if(is_numeric($_POST['descricao'])){
			$this->session->set_flashdata('campo_numero', 'Não pode conter apenas números no campo');
			$this->session->flashdata('campo_numero');
			redirect("beneficios/Novo");
		}
		
		if(!preg_match('/[A-Za-z0-9-]+$/u', $_POST['descricao'])){
			$this->session->set_flashdata('campo_especial', 'Não pode conter apenas caracteres diferente de letras no campo');
			$this->session->flashdata('campo_especial');
			redirect("beneficios/Novo");
		}
		
		$this->BeneficiosModel->descricao = $_POST['descricao'];
		$this->BeneficiosModel->ativo = $ativo;
		$this->BeneficiosModel->incluir();
		
	}
	
		//TELA EXCLUIR
	public function NovoExcluir($idbeneficios) {//novo
		$this->load->model('BeneficiosModel');
		$beneficios = $this->BeneficiosModel->encontrarid($idbeneficios);
		$pacote = array(
			'beneficios'=>$beneficios,
			'titulo'=>'Excluir Beneficios',
			'pagina'=>'beneficios/excluir.php'
		);		
		$this->load->view('index', $pacote);
	}

	public function excluir($idbeneficios) {//novo
		//var_dump($idbeneficios);
		//exit;
		$this->load->model('BeneficiosModel');
		$this->BeneficiosModel->idbeneficios = $_POST['idbeneficios'];
		$this->BeneficiosModel->excluir($idbeneficios);
	}
	
		//TELA UPDATE
	public function NovoEditar($idbeneficios) {
		$this->load->model('BeneficiosModel');
		$beneficios = $this->BeneficiosModel->encontrarid($idbeneficios);
		$pacote = array(
			'beneficios'=>$beneficios,
			'titulo'=>'Editar Beneficios',
			'pagina'=>'beneficios/editar.php'
		);
		
		$this->load->view('index', $pacote);
	}


	public function editar($idbeneficios) {
		//var_dump($idbeneficios);
		//exit;
		$this->load->model('BeneficiosModel');
		$this->BeneficiosModel->descricao = $_POST['descricao'];
		if(isset($_POST['ativo'])){
		    $ativo = 1;
		}else{
		    $ativo = 0;
		}
		$this->BeneficiosModel->ativo = $ativo;
		$this->BeneficiosModel->atualizar($idbeneficios);
	}
}

?>