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
							"<td>" . $linha->idcobertura . "</td>" . 
							"<td>" . $linha->descricao . "</td>" . 
							"<td>
								<a href='/eng3/index.php/cobertura/NovoEditar/$linha->idcobertura' class='btn btn-warning'>EDITAR</a>
								<a href='/eng3/index.php/cobertura/NovoExcluir/$linha->idcobertura' class='btn btn-danger'>EXCLUIR</a>
							</td>" .
						"</tr>";
				}
			?>
			<a href='/eng3/index.php/cobertura/Novo' class='btn btn-success'>CADASTRAR COBERTURA</a>
		</table>
	</div>
</div>
