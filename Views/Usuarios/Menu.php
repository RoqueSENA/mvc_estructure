<?php
$rol = $_SESSION['rol'];
require '../Menu/HeaderViews.php';
?>

<?php if ($rol == 'Administrador') { ?>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Administración
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="row mb-2">
									<a name="btn_adminFondo" id="btn_adminFondo" class="btn btn-warning" href="http://localhost/mvc_estructure/Controllers/MenuController.php?action=adminfondos" role="button">Administrar Fondos</a>
								</div>
								<div class="row mb-2">
									<a name="btn_adminUser" id="btn_adminUser" class="btn btn-warning" href="http://localhost/mvc_estructure/Controllers/MenuController.php?action=adminusers" role="button">Administrar Usuarios</a>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Movimientos
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="row mb-2">
									<a name="btn_recibir" id="btn_recibir" class="btn btn-warning" href="http://localhost/mvc_estructure/Controllers/MovimientosController.php?action=entrada" role="button">Recibir Cuadre</a>
								</div>
								<div class="row mb-2">
									<a name="btn_trasladar" id="btn_trasladar" class="btn btn-warning" href="#" role="button">Realizar Traslado</a>
								</div>
								<div class="row mb-2">
									<a name="btn_descargar" id="btn_descargar" class="btn btn-warning" href="#" role="button">Descargar Provision</a>
								</div>
								<div class="row mb-2">
									<a name="btn_ingCajaLata" id="btn_ingCajaLata" class="btn btn-warning" href="#" role="button">Ingresar Caja Lata</a>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Arqueos
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="row mb-2">
									<a name="btn_regFechaValor" id="btn_regFechaValor" class="btn btn-warning" href="#" role="button">Registrar Fecha Valor</a>
								</div>
								<div class="row mb-2">
									<a name="btn_arqueoCiego" id="btn_arqueoCiego" class="btn btn-warning" href="#" role="button">Realizar Conteo Ciego</a>
								</div>
								<div class="row mb-2">
									<a name="btn_unifPicos" id="btn_unifPicos" class="btn btn-warning" href="#" role="button">Unificar Picos</a>
								</div>
								<div class="row mb-2">
									<a name="btn_uni" id="btn_unifDatos" class="btn btn-warning" href="#" role="button">Unificar Datos</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	require '../Menu/Footer.php'
	?>
<?php } ?>

<?php if ($_SESSION['rol'] == 'Auxiliar') { ?>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Movimientos
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="row mb-2">
									<a name="btn_recibir" id="btn_recibir" class="btn btn-warning" href="http://localhost/mvc_estructure/Controllers/MovimientosController.php?action=entrada" role="button">Recibir Cuadre</a>
								</div>
								<div class="row mb-2">
									<a name="btn_trasladar" id="btn_trasladar" class="btn btn-warning" href="#" role="button">Realizar Traslado</a>
								</div>
								<div class="row mb-2">
									<a name="btn_descargar" id="btn_descargar" class="btn btn-warning" href="#" role="button">Descargar Provision</a>
								</div>
								<div class="row mb-2">
									<a name="btn_ingCajaLata" id="btn_ingCajaLata" class="btn btn-warning" href="#" role="button">Ingresar Caja Lata</a>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Arqueos
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="row mb-2">
										<a name="btn_regFechaValor" id="btn_regFechaValor" class="btn btn-warning" href="#" role="button">Registrar Fecha Valor</a>
									</div>
									<div class="row mb-2">
										<a name="btn_arqueoCiego" id="btn_arqueoCiego" class="btn btn-warning" href="#" role="button">Realizar Conteo Ciego</a>
									</div>
									<div class="row mb-2">
										<a name="btn_unifPicos" id="btn_unifPicos" class="btn btn-warning" href="#" role="button">Unificar Picos</a>
									</div>
									<div class="row mb-2">
										<a name="btn_uni" id="btn_unifDatos" class="btn btn-warning" href="#" role="button">Unificar Datos</a>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Arqueos
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="row mb-2">
										<a name="btn_regFechaValor" id="btn_regFechaValor" class="btn btn-warning" href="#" role="button">Registrar Fecha Valor</a>
									</div>
									<div class="row mb-2">
										<a name="btn_arqueoCiego" id="btn_arqueoCiego" class="btn btn-warning" href="#" role="button">Realizar Conteo Ciego</a>
									</div>
									<div class="row mb-2">
										<a name="btn_unifPicos" id="btn_unifPicos" class="btn btn-warning" href="#" role="button">Unificar Picos</a>
									</div>
									<div class="row mb-2">
										<a name="btn_uni" id="btn_unifDatos" class="btn btn-warning" href="#" role="button">Unificar Datos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>>
	<?php } ?>

	<?php
	require '../Menu/Footer.php'
	?>