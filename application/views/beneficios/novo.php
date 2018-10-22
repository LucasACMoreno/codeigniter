<h1><?php echo $titulo; ?></h1>

<?php echo form_open("beneficios/salvar"); ?>
	<div class="form-inline">
		<h3><?php echo $this->session->flashdata('campo_vazio');?></h3>
		<h3><?php echo $this->session->flashdata('campo_numero');?></h3>
		<h3><?php echo $this->session->flashdata('campo_especial');?></h3>
		<h3><?php echo $this->session->flashdata('campo_igual');?></h3>
		<h3><?php echo $this->session->flashdata('campo_espace');?></h3>
		<label for="inlineFormInput">Descrição: </label>
		<input type='text' class="form-control" style="width:300px;" size="40" name="descricao">
		<label for="inlineFormInput"><input type="checkbox" class="form-check-input" name="ativo" value="1">Ativo</label>
		<br/>
	</div>
	<input type='submit' class='btn btn-success'>
	<a href='/eng3/index.php/beneficios' class='btn btn-danger'>CANCELAR</a>
</form>