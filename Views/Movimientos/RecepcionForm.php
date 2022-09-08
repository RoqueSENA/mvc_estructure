<?php 
$rol = $_SESSION['rol'];
require '../Menu/HeaderViews.php';
?> 

<?php if ($rol == 'Administrador' || $rol == 'Auxiliar') { ?>
	<div class="container-fluid py-4">
		<div class="row justify-content-center">
			<div class="col-8">
				<div class="card">
					<div class="card-header text-center ">
						<h3>Recepcion de Cuadres</h3>
					</div>
					<div class="card-body">
						<form name="formConteoCiego" class="row justify-content-center" method="POST" id="formConteoCiego" action="MovimientosController.php" autocomplete="off">
							<div class = "row">
								<div class="col ">
									<label for="inputFecha" class="form-label">Fecha</label>
								</div>
								<div class="col ">
									<label for="protocolo" class="form-label"> Protocolo</label>
								</div>
								<div class="col">
									<label for="sellopico" class="form-label">N° Pico</label>
								</div>
							</div>	
							<div class = "mb-1 row">
								<div class="col-4">
									<input type="hidden" name="action" value="guardar">
									<input type="date" class="form-control" id="inputFecha" name="inputFecha" autofocus>
								</div>
								<div class="col-4">
									<input type="text" class="form-control" name="protocolo" id="protocolo">
								</div>
								<div class="col-4">
									<input type="text" class="form-control" name="sellopico" id="sellopico">
								</div>
							</div>
							<div class="row">
								<div class="col">
									<select name='inputFondo' class="form-select form-select-lg mb-1" id="inputFondo">
										<option selected>Fondo</option>
										<?php
										foreach ($data as $dato) {
										?>
											<option value="<?php echo $dato['nom_fondo'] ?>"><?php echo $dato['nom_fondo'] ?></option>
										<?php
										}
										?>
									</select>
								</div>
							<div class="row justify-content-center">
								<div class="col">
									<select class="form-select form-select-lg mb-1" id="inputCalidad" name="inputCalidad">
										<option selected>Calidad</option>
										<?php
										foreach ($datos as $calidad) {
										?>
											<option value="<?php echo $calidad['calidad'] ?>"><?php echo $calidad['calidad'] ?></option>
										<?php
										}
										?>
									</select>
									</div>
								<div class="col">
									<select name='inputEstado' class="form-select form-select-lg mb-1" id="inputEstado">
										<option selected>Estado</option>
										<?php
										foreach ($estado as $estados) {
										?>
											<option value="<?php echo $estados['estado'] ?>"><?php echo $estados['estado'] ?></option>
										<?php
										}
										?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col text-center">
								</div>
								<div class="col">
								<h5>FAJOS</h5>
								</div>
								<div class="col">
								<h5>PICOS</h5>
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-3 ">
									<label for="cant_cien" class="form-label">$100.000</label>
								</div>
								<div class="col">
									<input type="number" class="col mb-1 form-control" id="cant_cien" name="cant_cien">
								</div>
								<div class="col">
									<input type="number" class="col mb-1 form-control" id="pico_cien" name="pico_cien">
								</div>
							</div>
							<div class="row">
								<div class="col-3">
									<label for="cant_cincuenta" class="form-label">$50.000</label>
								</div>
								<div class="col">
									<input type="number" class="col mb-1 form-control" id="cant_cincuenta" name="cant_cincuenta">
								</div>
								<div class="col">
									<input type="number" class="col mb-1 form-control" id="_cincuenta" name="_cincuenta">
								</div>
							</div>
							<div class="row">
								<div class="col-3">
									<label for="cant_veinte" class="form-label">$20.000</label>
								</div>
								<div class="col">
									<input type="number" class="col mb-1 form-control" id="cant_veinte" name="cant_veinte">
								</div>
								<div class="col">
									<input type="number" class="col mb-1 form-control" id="picos_veinte" name="picos_veinte">
								</div>
							</div>
								<div class="row">
									<div class="col-3">
										<label for="cant_diez" class="form-label">$10.000</label>
									</div>
									<div class="col">
										<input type="number" class="col mb-1 form-control" id="cant_diez" name="cant_diez">
									</div>
									<div class="col">
										<input type="number" class="col mb-1 form-control" id="picos_diez" name="picos_diez">
									</div>
							</div>
							<div class="row">
								<div class="col-3">
									<label for="cant_cinco" class="form-label">$5.000</label>
								</div>
								<div class="col">
									<input type="number" class="col mb-1 form-control" id="cant_cinco" name="cant_cinco">
								</div>
								<div class="col">
									<input type="number" class="col mb-1 form-control" id="pico_cinco" name="pico_cinco">
								</div>
							</div>
							<div class="row">
								<div class="col-3">
									<label for="cant_dos" class="form-label">$2.000</label>
								</div>
								<div class="col">
									<input type="number" class="col px-2 mb-1 form-control" id="cant_dos" name="cant_dos">
								</div>
								<div class="col">
									<input type="number" class="col px-2 mb-1 form-control" id="pico_dos" name="pico_dos">
								</div>
							</div>
							<div class="row">
								<div class="col-3">
									<label for="cant_mil" class="form-label">$1.000</label>
								</div>
								<div class="col">
									<input type="number" class="col mb-1 form-control" id="cant_mil" name="cant_mil">
								</div>
								<div class="col">
									<input type="number" class="col mb-1 form-control" id="pico_mil" name="pico_mil">
								</div>
							</div>
								<div class="row">
									<div class="d-grid">
										<input type="submit" class="btn btn-success btn-block" value="Guardar">
									</div>
								</div>
							</div>
					</div>
				</div>
				</form>
			</div>
	</div>
</div>
<?php } ?>





<?php
require "../Menu/Footer.php";
?>