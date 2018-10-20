<h1><?php echo $titulo; ?></h1>

<?php echo form_open("estado/excluir/$estado->idestado"); ?>
<!--<?php var_dump($estado);?>-->
<div class="card">
	<table class="table table-hover table-striped">
		<tr>
			<td>ID</td>
			<td>Estado</td>
			<td>Sigla</td>
		</tr>
		<tr>
			<td><input type="hidden" name="idestado" value="<?php echo $estado->idestado ?>"><?php echo $estado->idestado ?></td>
			<td><input type="hidden" name="nome" value="<?php echo $estado->nome ?>"><?php echo $estado->nome ?></td>
			<td><input type="hidden" name="sigla" value="<?php echo $estado->sigla ?>"><?php echo $estado->sigla ?></td>
		</tr>
	</table>
</div>
	
	<!--<label>ID: </label>
	<input type='text' size="40" name="idestado" value="<?php echo $estado->idestado ?>">
	<br/>
	<label>Estado: </label>
	<input type='text' size="40" name="nome"  value="<?php echo $estado->nome ?>">
	<br/>
	<label>Sigla: </label>
	<input type='text' size="40" name="sigla" value="<?php echo $estado->sigla ?>">
	<br/>-->
	<input type='submit' class='btn btn-success' value='Confimar'>	
	<a href='/eng3/index.php/estado' class='btn btn-danger'>CANCELAR</a>
</form>