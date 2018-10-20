<h1><?php echo $titulo; ?></h1>

<?php echo form_open("estado/editar/$estado->idestado"); ?>
	<!--<?php var_dump($estado); ?>-->
	<div class="form-inline">
			<label for="inlineFormInput">Estado: </label>
			<input type='text' style="width:300px;"  class="form-control" name="nome" value="<?php echo $estado->nome?>">
			<label for="inlineFormInput">Sigla: </label>
			<input type='text' style="width:50px;" class="form-control" name="sigla" value="<?php echo $estado->sigla?>">	
	</div>
	<br/>
	<br/>
	<input type='submit' class='btn btn-success'>
	<a href='/eng3/index.php/estado' class='btn btn-danger'>CANCELAR</a>
</form>