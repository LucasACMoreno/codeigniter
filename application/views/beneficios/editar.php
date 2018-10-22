<h1><?php echo $titulo; ?></h1>

<?php echo form_open("beneficios/editar/$beneficios->idbeneficios"); ?>
	<div class="form-inline">
		<h3><?php echo $this->session->flashdata('campo_vazio');?></h3>
		<h3><?php echo $this->session->flashdata('campo_numero');?></h3>
		<h3><?php echo $this->session->flashdata('campo_especial');?></h3>
		<h3><?php echo $this->session->flashdata('campo_igual');?></h3>
		<h3><?php echo $this->session->flashdata('campo_espace');?></h3>
		<label for="inlineFormInput">Descricao: </label>
		<input type='text' style="width:300px;"  class="form-control" name="descricao" value="<?php echo $beneficios->descricao?>">
		<label for="inlineFormInput">Ativo: </label>
		<input type='checkbox' class="form-control" name="ativo" value="<?php echo $beneficios->ativo?>">	
	</div>
	<br/>
	<br/>
	<input type='submit' class='btn btn-success'>
	<a href='/eng3/index.php/beneficios' class='btn btn-danger'>CANCELAR</a>
</form>