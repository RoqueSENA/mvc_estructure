<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=fondos&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="cod_fondo">Codigo</label>
					<input type="text" class="form-control" id="cod_fondo" name="cod_fondo" />
				</div>
				
				<div class="form-group">
					<label for="nom_fondo">Nombre</label>
					<input type="text" class="form-control" id="nom_fondo" name="nom_fondo" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>