<h1><?php echo $titulo; ?></h1>

<?php echo form_open("cobertura/salvar"); ?>
	<div class="form-inline">
		<label for="inlineFormInput">Descrição: </label>
		<input type='text' class="form-control" style="width:300px;" size="40" name="descricao">
	</div>
	<br/>
	<br/>
	<input type='submit' class='btn btn-success'>
	<a href='/eng3/index.php/cobertura' class='btn btn-danger'>CANCELAR</a>
</form>