<?php
$rol = $_SESSION['rol'];
require "../Menu/HeaderViews.php";
?>
<?php if ($rol == 'Administrador') { ?>
	<div class="container py-4">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">
				<div class="card">
					<div class="card-header text-center ">
						<?php echo $data["titulo"]; ?>
					</div>
					<div class="card-body">
						<form id="nuevo" name="nuevo" method="POST" action="FondosController.php" autocomplete="off">
							<div class="form-group">
								<input type="hidden" name="action" value="actualizar">
								<label for="cod_fondo">Codigo</label>
								<input type="number" class="form-control" id="cod_fondo" name="cod_fondo" value="<?php echo $data["fondo"]["cod_fondo"] ?>" />
							</div>
							<div class="form-group">
								<label for="nom_fondo">Nombre</label>
								<input type="text" class="form-control" id="nom_fondo" name="nom_fondo" value="<?php echo $data["fondo"]["nom_fondo"] ?>" />
							</div>
							<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Actualizar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php
require "../Menu/Footer.php"
?>