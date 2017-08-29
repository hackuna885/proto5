<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0">
	<title>Proto 5</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- animaciones -->
<?php include("assets/inc/libreriasAnima.php"); ?>
<!-- animaciones -->

	<!-- script de ajax -->
	<script type="text/javascript" src="js/ajax/ajax.js"></script>
	<!-- script de ajax -->

</head>
<body>

	<div class="c1">
		<div class="c2">
			
			<div class="cLogo" data-animate-scroll='{"x": "-100","y": "0", "alpha": "0", "duration": ".9"}'>
					<div class="logo"></div>
			</div>



			<div class="cLogin">

				<div class="c2Titulo">INICIO</div>

				<div class="c2Form">
						<input type="text" id="txtCorreo" class="inp inpNombre" onkeypress="btnFormAjax(event)" placeholder="Correo..." required/>
						<br>
						<div id="midiv"></div>
				</div>


				<div class="cBtnRegistro">
						<a href="#">
							<div class="btnRegistro"></div>
							<div class="txtBtnReg">
								Registro
							</div>
						</a>
				</div>

			</div>

			<div class="cBotonLogin btnOcultar" onclick="formAjax2()" data-animate-scroll='{"x": "100", "y": "0", "alpha": "0", "duration": ".9"}'>
					<div class="txtBoton">
						CONTINUAR
					</div>
			</div>


		</div>
	</div>


<!-- animaciones -->
<?php include("assets/inc/scriptAnima.php"); ?>
<!-- animaciones -->

</body>
</html>