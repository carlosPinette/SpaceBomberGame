<?php 
/*
@autor:Carlos Perera a01099559
@file: index.php
*/

session_start();
if(!isset($_SESSION["username"])){
header('Location:index.php');
}


?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
    	<title>Bienvenido</title>
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/corner.js"></script>
		<script type="text/javascript">
			$("#t-x0y0").corner("5px");
		</script>
    </head>
    <body>
		<table id="map" class="" style="width: 200px; height: 200px;">
    	<div id="t-x0y0" class="" style="top: 0px; left: 0px;">1</div>
		<div id="t-x1y0" class="" style="top: 0px; left: 25px;">1</div>
		<div id="t-x2y0" class="" style="top: 0px; left: 50px;">1</div>
		<div id="t-x3y0" class="" style="top: 0px; left: 75px;">1</div>
		<div id="t-x4y0" class="" style="top: 0px; left: 100px;">1</div>
		<div id="t-x5y0" class="" style="top: 0px; left: 125px;">1</div>
		<div id="t-x6y0" class="" style="top: 0px; left: 150px;">1</div>
		<div id="t-x7y0" class="" style="top: 0px; left: 175px;">1</div>
		<div id="t-x0y1" class="" style="top: 25px; left: 0px;">1</div>
		<div id="t-x1y1" class="" style="top: 25px; left: 25px;">1</div>
		<div id="t-x2y1" class="" style="top: 25px; left: 50px;">1</div>
		<div id="t-x3y1" class="" style="top: 25px; left: 75px;">1</div>
		<div id="t-x4y1" class="" style="top: 25px; left: 100px;">1</div>
		<div id="t-x5y1" class="" style="top: 25px; left: 125px;">1</div>
		<div id="t-x6y1" class="" style="top: 25px; left: 150px;">1</div>
		<div id="t-x7y1" class="" style="top: 25px; left: 175px;">1</div>
		<div id="t-x0y2" class="" style="top: 50px; left: 0px;">1</div>
		<div id="t-x1y2" class="" style="top: 50px; left: 25px;">1</div>
		<div id="t-x2y2" class="" style="top: 50px; left: 50px;">1</div>
		<div id="t-x3y2" class="" style="top: 50px; left: 75px;">1</div>
		<div id="t-x4y2" class="" style="top: 50px; left: 100px;">1</div>
		<div id="t-x5y2" class="" style="top: 50px; left: 125px;">1</div>
		<div id="t-x6y2" class="" style="top: 50px; left: 150px;">1</div>
		<div id="t-x7y2" class="" style="top: 50px; left: 175px;">1</div>
		<div id="t-x0y3" class="" style="top: 75px; left: 0px;">1</div>
		<div id="t-x1y3" class="" style="top: 75px; left: 25px;">1</div>
		<div id="t-x2y3" class="" style="top: 75px; left: 50px;">1</div>
		<div id="t-x3y3" class="" style="top: 75px; left: 75px;">1</div>
		<div id="t-x4y3" class="" style="top: 75px; left: 100px;">1</div>
		<div id="t-x5y3" class="" style="top: 75px; left: 125px;">1</div>
		<div id="t-x6y3" class="" style="top: 75px; left: 150px;">1</div>
		<div id="t-x7y3" class="" style="top: 75px; left: 175px;">1</div>
		<div id="t-x0y4" class="" style="top: 100px; left: 0px;">1</div>
		<div id="t-x1y4" class="" style="top: 100px; left: 25px;">1</div>
		<div id="t-x2y4" class="" style="top: 100px; left: 50px;">1</div>
		<div id="t-x3y4" class="" style="top: 100px; left: 75px;">1</div>
		<div id="t-x4y4" class="" style="top: 100px; left: 100px;">1</div>
		<div id="t-x5y4" class="" style="top: 100px; left: 125px;">1</div>
		<div id="t-x6y4" class="" style="top: 100px; left: 150px;">1</div>
		<div id="t-x7y4" class="" style="top: 100px; left: 175px;">1</div>
		<div id="t-x0y5" class="" style="top: 125px; left: 0px;">1</div>
		<div id="t-x1y5" class="" style="top: 125px; left: 25px;">1</div>
		<div id="t-x2y5" class="" style="top: 125px; left: 50px;">1</div>
		<div id="t-x3y5" class="" style="top: 125px; left: 75px;">1</div>
		<div id="t-x4y5" class="" style="top: 125px; left: 100px;">1</div>
		<div id="t-x5y5" class="" style="top: 125px; left: 125px;">1</div>
		<div id="t-x6y5" class="" style="top: 125px; left: 150px;">1</div>
		<div id="t-x7y5" class="" style="top: 125px; left: 175px;">1</div>
		<div id="t-x0y6" class="" style="top: 150px; left: 0px;">1</div>
		<div id="t-x1y6" class="" style="top: 150px; left: 25px;">1</div>
		<div id="t-x2y6" class="" style="top: 150px; left: 50px;">1</div>
		<div id="t-x3y6" class="" style="top: 150px; left: 75px;">1</div>
		<div id="t-x4y6" class="" style="top: 150px; left: 100px;">1</div>
		<div id="t-x5y6" class="" style="top: 150px; left: 125px;">1</div>
		<div id="t-x6y6" class="" style="top: 150px; left: 150px;">1</div>
		<div id="t-x7y6" class="" style="top: 150px; left: 175px;">1</div>
		<div id="t-x0y7" class="" style="top: 175px; left: 0px;">1</div>
		<div id="t-x1y7" class="" style="top: 175px; left: 25px;">1</div>
		<div id="t-x2y7" class="" style="top: 175px; left: 50px;">1</div>
		<div id="t-x3y7" class="" style="top: 175px; left: 75px;">1</div>
		<div id="t-x4y7" class="" style="top: 175px; left: 100px;">1</div>
		<div id="t-x5y7" class="" style="top: 175px; left: 125px;">1</div>
		<div id="t-x6y7" class="" style="top: 175px; left: 150px;">1</div>
		<div id="t-x7y7" class="" style="top: 175px; left: 175px;">1</div>
		<div class="about">8x8, 10 bombs.</div>
		</table>
		
    </body>
</html>    
