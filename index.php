<?php


ini_set('display_errors', 'Off');
ini_set('display_startup_errors', 'Off');
error_reporting(0);

$username = $_GET['username'];
$password = $_GET['password'];


function Conectarse()
{
   if (!($link=mysql_connect("localhost","root")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("jugador",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}

$con = Conectarse();
$query = "SELECT * FROM usuarios WHERE username ='".$username."' AND password = '".$password."'";
$q = mysql_query($query,$con);
try{


if(mysql_result($q,0))
{$result = mysql_result($q, 0);
session_start();
	$_SESSION["username"]= ($_GET["username"]);
	
	
	//redirige si el usiuario es valido
	header('location:formulario.php');
}else
    $message = "Usuario o password erroneos.";
}catch(Exception $error){}
mysql_close($con);

$message="";

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
			<div id="letras">
				<img style="width: 600px;" src="images/cooltext685027420.png" alt="logo">
			</div>
			<div id="logo">
				<img style="width: 300px;" src="images/Torpedo_Ted.png" alt="logo">
			</div>
			<div id="social">
				<a href="http://www.facebook.com" target="_blank">
					<img id="fb" alt="fb" src="images/fb.png"/>
				</a>
				<a href="http://www.youtube.com" target="_blank">
					<img id="yt" alt="yt" src="images/yt.png"/>
				</a>
			</div>
			
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div id="mensaje"><a><?php echo $mssg ?></a></div>
			<form action="index.php" method="get" class="formulario">
				<fieldset>
				<legend>Bienvenido a Space Bomber!</legend>
				<label for="usrnam">Username:</label>: <input id="usernam" type="text" name="username" /><br />
				<label for="pass">Password:  </label>: <input id="pssword" type="password" name="password" /><br />        	
				</fieldset>
				<p>&nbsp;</p>
			<form>
					<input type="image" src="images/cooltext685030488.png" onmouseover="this.src='images/cooltext685030488MouseOver.png';" onmouseout="this.src='images/cooltext685030488.png';" onsubmit="submit-form();">
				</form> 
				
				<div id="">
					<a href = "registro.php">
						<img src="images/cooltext685046756.png" onmouseover="this.src='images/cooltext685046756MouseOver.png';" onmouseout="this.src='images/cooltext685046756.png';" />
					</a>
				</div>
				
			</form>	
			
		</div>
		
    	
    </body>
</html>