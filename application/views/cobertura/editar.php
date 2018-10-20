<h1><?php echo $titulo; ?></h1>

<?php echo form_open("cobertura/editar/$cobertura->idcobertura"); ?>
	<!--<?php var_dump($cobertura); ?>-->
	<div class="form-inline">
			<label for="inlineFormInput">Descrição: </label>
			<input type='text' style="width:300px;"  class="form-control" name="descricao" value="<?php echo $cobertura->descricao?>">
	</div>
	<br/>
	<br/>
	<input type='submit' class='btn btn-success'>
	<a href='/eng3/index.php/cobertura' class='btn btn-danger'>CANCELAR</a>
</form>