<?php
$rol = $_SESSION['rol'];
require '../Menu/HeaderViews.php';
?>

<?php if ($rol == 'Administrador') { ?>
	<div class="container py-4">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h3>Registro</h3>
					</div>
					<div class="card-body">
						<form method='POST' action="UsuariosController.php">
							<div class="mb-3 row px-2">
								<label for="codusr" class="col-xs-4 col-form-label">Codigo de usuario</label>
								<div class="col-xs-8">
									<input type="hidden" name="action" value="registrar">
									<input type="text" class="form-control" name="codusr" id="codusr" placeholder="CO00..." required>
								</div>
							</div>
							<div class="mb-3 row px-2">
								<label for="nomusr" class="col-xs-4 col-form-label">Nombre</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" name="nomusr" id="nomusr" placeholder="Nombre" required>
								</div>
							</div>
							<div class="mb-3 row px-2">
								<label for="passusr" class="col-xs-4 col-form-label">Contraseña</label>
								<div class="col-xs-8">
									<input type="password" class="form-control" name="passusr" id="passusr" placeholder="Password" required>
								</div>
							</div>
							<div class="mb-3 row px-2">
								<label for="rolusr" class="col-xs-4 col-form-label">Perfil</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" name="rolusr" id="rolusr" placeholder="Rol" required>
								</div>
							</div>
							<div class="mb-3 row">
								<div class="col">
									<div class="d-grid">
										<button type="submit" class="btn btn-success btn-block" value="http://localhost/mvc_estructure/Controllers/UsuariosController.php?action=registrar">Crear</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<table class="table table-striped ">
						<thead>
							<tr>
								<th>CODIGO</th>
								<th>NOMBRE</th>
								<th>PASSWORD</th>
								<th>ROL</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $dato) {
								echo "<tr>";
								echo "<td>" . $dato["cod_usr"] . "</td>";
								echo "<td>" . $dato["nom_usr"] . "</td>";
								echo "<td>" . $dato["pass_usr"] . "</td>";
								echo "<td>" . $dato["rol_usr"] . "</td>";
								echo "<td><a href='http://localhost/mvc_estructure/Controllers/UsuariosController.php?action=modifiuser&codusr=" . $dato["cod_usr"] . "' class='btn btn-warning'>Modificar</a></td>";
								echo "<td><a href='http://localhost/mvc_estructure/Controllers/UsuariosController.php?action=eliminar&codusr=" . $dato["cod_usr"] . "' class='btn btn-danger'>Eliminar</a></td>";
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
require "../Menu/Footer.php";
?>