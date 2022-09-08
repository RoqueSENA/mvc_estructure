<?php
require '../Menu/HeaderLogin.php';
?>
<div class="container py-4">

	<div class="row justify-content-md-center">
		<div class="col-md-auto">
			<div class="card">
				<div class="card-header text-center ">
					<h3>Login</h3>
				</div>
				<div class="card-body">
					<form action="UsuariosController.php" method='POST'>
						<div class="mb-3 row px-2">
							<label for="codusr" class="col-form-label">Codigo de usuario</label>
							<div class="col">
								<input type="hidden" name="action" value="login">
								<input type="text" class="form-control" name="codusr" id="codusr" placeholder="CO00..." required>
							</div>
						</div>
						<div class="mb-3 row px-2">
							<label for="passusr" class="col-form-label">Contraseña</label>
							<div class="col">
								<input type="password" class="form-control" name="passusr" id="passusr" placeholder="password" required>
							</div>
						</div>
						<div class="mb-3 row">
							<div class="d-grid">
								<button type="submit" class="btn btn-success btn-block" value="login">Ingresar</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>

<?php
require "../Menu/footer.php";
?>