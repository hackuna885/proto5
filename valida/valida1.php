<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

if (isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo'])) {

	$con = new SQLite3("../protected/data/usuarios.db") or die("Problemas para conectar");
	$cs = $con -> query("SELECT * FROM login WHERE correo = '$_POST[txtCorreo]'");

	$correo = "";

	while ($resul = $cs -> fetchArray()) {

		$nombre = $resul['nombre'];
		$aPaterno = $resul['aPaterno'];
		$aMaterno = $resul['aMaterno'];
		$correo = $resul['correo'];
		$pwUsuario = $resul['password'];
		$clvCat = $resul['claveCat'];
	}
	
	if ($_POST['txtCorreo'] == $correo) {

		$_SESSION['pass'] = $pwUsuario;
		$_SESSION['clvCat'] = $clvCat;

			echo '
				<input type="password" id="txtPassword" class="inp inpPassword" onkeypress="btnFormAjax2(event)" placeholder="Password..."/>
				<br>
				<div class="cBotonLogin pos2" onclick="formAjax3()"" >
					<div class="txtBoton">
						ACCEDER
					</div>
				</div>
			';
		$con -> close();
		
	}else{
		echo '
		<span class="spanTexto">Correo no registrado</span>
		<br>
			<div class="cBotonLogin pos2" onclick="formAjax2()"" >
					<div class="txtBoton">
						CONTINUAR
					</div>
				</div>

		';
		$con -> close();
	}
}else{
	echo'
	<span class="spanTexto">Falta Correo</span>
	<br>
			<div class="cBotonLogin pos2" onclick="formAjax2()"" >
					<div class="txtBoton">
						CONTINUAR
					</div>
				</div>
	';
}

 ?>
 <html>
 	<style>
 		.btnOcultar{
 			display: none;
 		}
 	</style>
	
 </html>