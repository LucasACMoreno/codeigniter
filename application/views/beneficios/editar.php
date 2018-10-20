<h1><?php echo $titulo; ?></h1>

<?php echo form_open("beneficios/editar/$beneficios->idbeneficios"); ?>
	<!--<?php var_dump($beneficios); ?>-->
	<div class="form-inline">
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