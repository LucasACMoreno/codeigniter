<h1><?php echo $titulo; ?></h1>

<?php echo form_open("cobertura/excluir/$cobertura->idcobertura"); ?>
<div class="card">
	<table class="table table-hover table-striped">
		<tr>
			<td>ID</td>
			<td>Descrição</td>
		</tr>
		<tr>
			<td><input type="hidden" name="idcobertura" value="<?php echo $cobertura->idcobertura ?>"><?php echo $cobertura->idcobertura ?></td>
			<td><input type="hidden" name="descricao" value="<?php echo $cobertura->descricao ?>"><?php echo $cobertura->descricao ?></td>
		</tr>
	</table>
</div>
	<input type='submit' class='btn btn-success' value='Confimar'>	
	<a href='/eng3/index.php/cobertura' class='btn btn-danger'>CANCELAR</a>
</form>