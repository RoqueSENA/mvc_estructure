<?php
require '../Menu/HeaderViews.php';
$rol = $_SESSION['rol'];
?>

<?php if ($rol == 'Administrador') { ?>
	<div class="container py-4">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h3>Administrador de Fondos</h3>
					</div>
					<div class="card-body">
						<form action="FondosController.php" method='POST'>
							<div class="mb-3 row px-2">
								<label for="codfondo" class="col-xs-4 col-form-label">Codigo de Fondo</label>
								<div class="col-xs-8">
									<input type="hidden" name="action" value="guardar">
									<input type="text" class="form-control" name="codfondo" id="codfondo" placeholder="Codigo" required>
								</div>
							</div>
							<div class="mb-3 row px-2">
								<label for="nomfondo" class="col-xs-4 col-form-label">Nombre del Fondo</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" name="nomfondo" id="nomfondo" placeholder="Nombre" required>
								</div>
							</div>
							<div class="mb-3 row">
								<div class="col">
									<div class="d-grid">
										<button type="submit" class="btn btn-success btn-block" value="nuevofondo">Crear</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<table class="table table-striped">
						<thead>
							<tr>
								<th class="theader">CODIGO</th>
								<th class="theader">NOMBRE</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $dato) {
								echo "<tr>";
								echo "<td>" . $dato["cod_fondo"] . "</td>";
								echo "<td>" . $dato["nom_fondo"] . "</td>";
								echo "<td><a href='http://localhost/mvc_estructure/Controllers/FondosController.php?action=modificar&codfondo=" . $dato["cod_fondo"] . "' class='btn btn-warning'>Modificar</a></td>";
								echo "<td><a href='http://localhost/mvc_estructure/Controllers/FondosController.php?action=eliminar&codfondo=" . $dato["cod_fondo"] . "' class='btn btn-danger'>Eliminar</a></td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php
require '../Menu/Footer.php'
?>