<h1><?php echo $titulo; ?></h1>

<?php echo form_open("parentesco/excluir/$parentesco->idparentesco"); ?>
<div class="card">
	<table class="table table-hover table-striped">
		<tr>
			<td>ID</td>
			<td>Descrição</td>
		</tr>
		<tr>
			<td><input type="hidden" name="idparentesco" value="<?php echo $parentesco->idparentesco ?>"><?php echo $parentesco->idparentesco ?></td>
			<td><input type="hidden" name="descricao" value="<?php echo $parentesco->descricao ?>"><?php echo $parentesco->descricao ?></td>
		</tr>
	</table>
</div>
	<input type='submit' class='btn btn-success' value='Confimar'>	
	<a href='/eng3/index.php/parentesco' class='btn btn-danger'>CANCELAR</a>
</form>