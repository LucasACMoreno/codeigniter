<h1><?php echo $titulo; ?></h1>

<?php echo form_open("estado/salvar"); ?>
	<div class="form-inline">
		<label for="inlineFormInput">Estado: </label>
		<input type='text' class="form-control" style="width:300px;" size="40" name="nome">
		<label for="inlineFormInput">Sigla: </label>
		<input type='text' class="form-control" style="width:50px;" size="40" name="sigla">
	</div>
	<br/>
	<br/>
	<input type='submit' class='btn btn-success'>
	<a href='/eng3/index.php/estado' class='btn btn-danger'>CANCELAR</a>
</form>