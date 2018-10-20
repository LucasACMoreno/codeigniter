<h1><?php  echo $titulo; ?></h1>
<div class="col-12">
	<div class="card">
		<table class="table table-hover table-striped">
			<tr>
				<td>ID</td>
				<td>Descrição</td>
				<td>Opções</td>
			</tr>
			<?php
				foreach($dados_tabela as $linha){
					echo "<tr>" .
							"<td>" . $linha->idparentesco . "</td>" . 
							"<td>" . $linha->descricao . "</td>" . 
							"<td>
								<a href='/eng3/index.php/parentesco/NovoEditar/$linha->idparentesco' class='btn btn-warning'>EDITAR</a>
								<a href='/eng3/index.php/parentesco/NovoExcluir/$linha->idparentesco' class='btn btn-danger'>EXCLUIR</a>
							</td>" .
						"</tr>";
				}
			?>
			<a href='/eng3/index.php/parentesco/Novo' class='btn btn-success'>CADASTRAR PARENTESCO</a>
		</table>
	</div>
</div>
