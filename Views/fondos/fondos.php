<?php
require "../Menu/HeaderViews.php"


?>




<body>
	<div class="container py-4">

		<div class="row">
			<div class="col-md">
				<h2><?php echo $data["titulo"]; ?></h2>
				<div class="col-sm-2">
					<a href="index.php?c=fondos&a=nuevo" class="btn">Agregar</a>
				</div>
				<br />
				<br />
				<div class="table">
					<table border="1" width="80%" class="table">
						<thead>
							<tr>
								<th>Codigo</th>
								<th>Nombre</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($data["fondos"] as $dato) {
								echo "<tr>";
								echo "<td>" . $dato["cod_fondo"] . "</td>";
								echo "<td>" . $dato["nom_fondo"] . "</td>";
								echo "<td><a href='index.php?c=fondos&a=modificar&id=" . $dato["cod_fondo"] . "' class='btn btn-warning'>Modificar</a></td>";
								echo "<td><a href='index.php?c=fondos&a=eliminar&id=" . $dato["cod_fondo"] . "' class='btn btn-danger'>Eliminar</a></td>";
								echo "</tr>";
							}
							?>
						</tbody>

					</table>
				</div>
			</div>
		</div>

	</div>