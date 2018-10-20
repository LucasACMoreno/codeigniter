<h1><?php echo $titulo; ?></h1>

<?php echo form_open("parentesco/salvar"); ?>
	<div class="form-inline">
		<label for="inlineFormInput">Descrição: </label>
		<input type='text' class="form-control" style="width:300px;" size="40" name="descricao">
	</div>
		<br/>
		<input type='submit' class='btn btn-success'>
		<a href='/eng3/index.php/parentesco' class='btn btn-danger'>CANCELAR</a>
</form>