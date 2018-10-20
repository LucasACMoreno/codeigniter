<h1><?php echo $titulo; ?></h1>

<?php echo form_open("parentesco/editar/$parentesco->idparentesco"); ?>
	<!--<?php var_dump($parentesco); ?>-->
	<div class="form-inline">
			<label for="inlineFormInput">Descrição: </label>
			<input type='text' style="width:300px;"  class="form-control" name="descricao" value="<?php echo $parentesco->descricao?>">	
	</div>
	<br/>
	<br/>
	<input type='submit' class='btn btn-success'>
	<a href='/eng3/index.php/parentesco' class='btn btn-danger'>CANCELAR</a>
</form>