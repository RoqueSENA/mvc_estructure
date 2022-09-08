<?php
$rol = $_SESSION['rol'];
require '../Menu/HeaderViews.php';
?>

<?php if ($rol == 'Administrador') { ?>
	<div class="container py-4">
		<div class="row">
			<div class="col">
				<div class="card">
				<div class="card-header text-center ">
						<?php echo $data["titulo"]; ?>
					</div>
					<div class="card-body">
						<form method='POST' action="UsuariosController.php">
							<div class="mb-3 row px-2">
								<label for="codusr" class="col-xs-4 col-form-label">Codigo de usuario</label>
								<div class="col-xs-8">
									<input type="hidden" name="action" value="actualizar">
									<input type="text" class="form-control" name="codusr" id="codusr" value="<?php echo $data["usuario"]["cod_usr"] ?>">
								</div>
							</div>
							<div class="mb-3 row px-2">
								<label for="nomusr" class="col-xs-4 col-form-label">Nombre</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" name="nomusr" id="nomusr" value="<?php echo $data["usuario"]["nom_usr"] ?>">
								</div>
							</div>
							<div class="mb-3 row px-2">
								<label for="passusr" class="col-xs-4 col-form-label">Contraseña</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" name="passusr" id="passusr" value="<?php echo $data["usuario"]["pass_usr"] ?>">
								</div>
							</div>
							<div class="mb-3 row px-2">
								<label for="rolusr" class="col-xs-4 col-form-label">Perfil</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" name="rolusr" id="rolusr" value="<?php echo $data["usuario"]["rol_usr"] ?>">
								</div>
								</div>
									<div class="mb-3 row">
										<div class="col">
											<div class="d-grid">
												<button type="submit" class="btn btn-success btn-block" value="http://localhost/mvc_estructure/Controllers/UsuariosController.php?action=actualizar">Modificar</a>
											</div>
										</div>
								</form>
							</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php
require "../Menu/Footer.php";
?>
