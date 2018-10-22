<h1><?php  echo $titulo; ?></h1>
<div class="col-12">
	<div class="card">
		<table class="table table-hover table-striped">
			<tr>
				<td>ID</td>
				<td>Descrição</td>
				<td>Ativo</td>
				<td>Opções</td>
			</tr>
			<?php
				foreach($dados_tabela as $linha){
					echo "<tr>" .
							"<td>" . $linha->idbeneficios . "</td>" . 
							"<td>" . $linha->descricao . "</td>" . 
							"<td>" . ($linha->ativo ? 'Ativo' : 'Inativo') . "</td>" . 
							"<td>
								<a href='/eng3/index.php/beneficios/NovoEditar/$linha->idbeneficios' class='btn btn-warning'>EDITAR</a>
								<a href='/eng3/index.php/beneficios/NovoExcluir/$linha->idbeneficios' class='btn btn-danger'>EXCLUIR</a>
							</td>" .
						"</tr>";
				}
			?>
			<a href='/eng3/index.php/beneficios/Novo' class='btn btn-success'>CADASTRAR BENEFÍCIOS</a>
		</table>
	</div>
</div>
