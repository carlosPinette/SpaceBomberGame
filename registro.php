<?php

// Conexi&oacute;n a la base de datos
$conn = mysql_connect("localhost", "root" ) or die(mysql_error());
mysql_select_db('jugador', $conn ) or die(mysql_error());

$mssg = "";

// Preguntaremos si se han enviado ya las variables necesarias
if (isset($_POST["username"] ) ) {
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];


$nombrefoto=$_FILES['foto']['name'];
$ruta=$_FILES['foto']['tmp_name'];
$destino =  "fotos/".$nombrefoto;
copy($ruta,$destino);



// Hay campos en blanco
if($username==NULL|$password==NULL|$cpassword==NULL) {
$mssg = "Hay Campos Vacios";
}else{
// &iquest;Coinciden las contrase&ntilde;as?
if($password!=$cpassword) {
$mssg = "Las Contrase&ntilde;as No Coinciden";
}else{
// Comprobamos si el nombre de usuario o la cuenta de correo ya exist&iacute;an
$checkuser = mysql_query("SELECT username FROM usuarios WHERE username='$username'" ) ;
$username_exist = mysql_num_rows($checkuser);



if ($username_exist>0) {
$mssg = "EL Nombre de Usuario esta ya en Uso";
}else{
//Todo parece correcto procedemos con la inserccion
$query = "INSERT INTO usuarios (username, password, score, foto) VALUES('$username','$password','0', '$destino')";
mysql_query($query) or die(mysql_error());
$mssg = "El usuario $username ha sido Registrado de manera satisfactoria, ahora puedes iniciar sesión";
}
}
}
}
?>


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
    	<title>Space Bomber</title>
		
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/corner.js"></script>
		<script type="text/javascript">
			$("#social").corner("bl 20px");
		</script>
	
    </head>
	
    <body>
	<div id="imgprin">
    	
		<div id="letras2">
				<img style="width: 600px;" src="images/cooltext685027420.png" alt="logo">
			</div>
		
		<div id="inicio">
			<a href = "index.php">
				<img src="images/cooltext685044228.png" onmouseover="this.src='images/cooltext685044228MouseOver.png';" onmouseout="this.src='images/cooltext685044228.png';" />
			</a>
		</div>
        
		<div id="social">
				<a href="http://www.facebook.com" target="_blank">
					<img id="fb" alt="fb" src="images/fb.png"/>
				</a>
				<a href="http://www.youtube.com" target="_blank">
					<img id="yt" alt="yt" src="images/yt.png"/>
				</a>
			</div>
			
			<form id="nivele" action="registro.php" enctype="multipart/form-data" method="post" class="nivel">
			
			<div id="mensaje"><a><?php echo $mssg ?></a></div>
		
			<label for="reg"></label> <br />
			<fieldset>
				<legend>Ingresa tus datos:</legend>
				<label for="alto">Nombre de Usuario:</label><input maxlength="25" size="25" name="username" /><br />
				<label for="ancho">Password:</label><input maxlength="25" size="25" name="password" /><br /> 	
            	<label for="minas">Repite password:</label><input maxlength="25" size="25" name="cpassword" /><br />
				<label for="foto">Foto:</label><input type="file" name="foto" id="fotos"/>
				<br>
				<input id="boton" type="submit" value="Registrar">
			
						</td>
							
			</fieldset>
			
						</form>
        
		
	</div>
    </body>
</html>    