<h1><?php  echo $titulo; ?></h1>
<div class="col-12">
	<div class="card">
		<table class="table table-hover table-striped">
			<tr>
				<td>ID</td>
				<td>Estado</td>
				<td>Sigla</td>
				<td>Opções</td>
			</tr>
			<?php
				foreach($dados_tabela as $linha){
					echo "<tr>" .
							"<td>" . $linha->idestado . "</td>" . 
							"<td>" . $linha->nome . "</td>" . 
							"<td>" . $linha->sigla . "</td>" . 
							"<td>
								<a href='/eng3/index.php/estado/NovoEditar/$linha->idestado' class='btn btn-warning'>EDITAR</a>
								<a href='/eng3/index.php/estado/NovoExcluir/$linha->idestado' class='btn btn-danger'>EXCLUIR</a>
							</td>" .
						"</tr>";
				}
			?>
			<a href='/eng3/index.php/estado/Novo' class='btn btn-success'>CADASTRAR ESTADO</a>
		</table>
	</div>
</div>
