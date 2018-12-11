<?php 

session_start();

if(!isset($_SESSION["username"])){
header('Location:index.php');
}
// Conexion a la base de datos 
$conn = mysql_connect("localhost", "root" ) or die(mysql_error());
mysql_select_db('jugador', $conn ) or die(mysql_error());
$re=mysql_query("SELECT score, foto FROM usuarios WHERE username='".$_SESSION["username"]."'");
 while($f=mysql_fetch_array($re)){
 $score = $f['score'];
 $fot = $f['foto'];
}

$result = $_SESSION["username"];

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
		
		<img id= "fotousu" src=<?php echo $fot ?> width="100" heigth="100"/>		
		<h2 class="entre">Usuario: <?php echo $result ?></h2>
		 
		
		<div id="logout"><a href="logout.php">Cerrar sesi&oacute;n</a></div>
        
		<div id="social">
				<a href="http://www.facebook.com" target="_blank">
					<img id="fb" alt="fb" src="images/fb.png"/>
				</a>
				<a href="http://www.youtube.com" target="_blank">
					<img id="yt" alt="yt" src="images/yt.png"/>
				</a>
			</div>
        <form id="nivele" action="spacebomber.php" method="get" class="nivel">
		
			<label for="principiante"></label> <br />
			<fieldset>
				<legend>Principiante:</legend>
				<label for="alto">Alto</label>: <input value="7" id="principiante" type="text" name="alto"/><br />
				<label for="ancho">Ancho</label>: <input  value="7"id="intermedio" type="text"  name="ancho"/><br />        	
            	<label for="minas">No. de minas</label>: <input value="10" id="avanzado" type="text"  name="minas"/><br />	
				<input id="boton" type="submit" value="Jugar">
			
						</td>
							
			</fieldset>
			
						</form>
						<p>&nbsp;</p>
						
			<form id="nivele" action="spacebomber.php" method="get" class="nivel">
			<label for="intermedio"></label> <br />
			<fieldset>
			
				<legend>Intermedio:</legend>
				<label for="alto">Alto</label>: <input value="9" id="principiante" type="text" name="alto"/><br />
				<label for="ancho">Ancho</label>: <input  value="9"id="intermedio" type="text"  name="ancho"/><br />        	
            	<label for="minas">No. de minas</label>: <input value="35" id="avanzado" type="text"  name="minas"/><br />	
				<input id="boton" type="submit" value="Jugar">
						</td>	
			</fieldset>
			
								
			</form>
			<p>&nbsp;</p>
			
			<form id="nivele" action="spacebomber.php" method="get" class="nivel">
			<label for="avanzado"></label> <br />
			<fieldset>
				<legend>Avanzado:</legend>
				<label for="alto">Alto</label>: <input value="11" id="principiante" type="text" name="alto"/><br />
				<label for="ancho">Ancho</label>: <input  value="11"id="intermedio" type="text"  name="ancho"/><br />        	
            	<label for="minas">No. de minas</label>: <input value="80" id="avanzado" type="text"  name="minas"/><br />	
				<input id="boton" type="submit" value="Jugar">
						</td>	
			</fieldset>
			
					
			</form>
			<p>&nbsp;</p>
			
			<form id="nivele" action="spacebomber.php" method="get" class="nivel">
			<label for="personalizado"></label> <br />
			<fieldset>
				<legend>Personalizado:</legend>
				<label for="alto">Alto</label>: <input  id="principiante" type="text" name="alto"/><br />
				<label for="ancho">Ancho</label>: <input id="intermedio" type="text"  name="ancho"/><br />        	
            	<label for="minas">No. de minas</label>: <input id="avanzado" type="text"  name="minas"/><br />	
				<input id="boton" type="submit" value="Jugar">
						</td>	
			</fieldset>
		
				
				        
                    	
        </form>
	</div>
    </body>
</html>    