<h1><?php echo $titulo; ?></h1>

<?php echo form_open("beneficios/excluir/$beneficios->idbeneficios"); ?>
<div class="card">
	<table class="table table-hover table-striped">
		<tr>
			<td>ID</td>
			<td>Descrição</td>
			<td>Ativo</td>
		</tr>
		<tr>
			<td><input type="hidden" name="idbeneficios" value="<?php echo $beneficios->idbeneficios ?>"><?php echo $beneficios->idbeneficios ?></td>
			<td><input type="hidden" name="nome" value="<?php echo $beneficios->descricao ?>"><?php echo $beneficios->descricao ?></td>
			<td><input type="hidden" name="ativo" value="<?php echo $beneficios->ativo ?>"><?php echo $beneficios->ativo ?></td>
		</tr>
	</table>
</div>
	<input type='submit' class='btn btn-success' value='Confimar'>	
	<a href='/eng3/index.php/beneficios' class='btn btn-danger'>CANCELAR</a>
</form>