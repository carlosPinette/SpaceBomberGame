
<html>
	<head>
		<Style>
		td.imagen{
Background: url(degradadorojo.jpg) repeat-x #d11c1c;
}
		td.tapa{
		Background:url(degradadoazul.jpg) repeat-x #0c26ea;
		color:white;
		}
		div.titulo{
		color:white;
		font-size:30;
		}
		span.celda {
		display:none;
		}

		td.hover{
		border: 1px solid red;
		}
		td.cero{
		Background: url(degradadolinea.jpg) repeat-x #a9a9a9;
		text-align: center;

		color: white;
		Font-weight: bold;
		}
		td.uno{
		Background: url(degradadolinea.jpg) repeat-x #a9a9a9;
		text-align: center;
		color: purple;
		Font-weight: bold;
		}
		td.dos{
		Background: url(degradadolinea.jpg) repeat-x #a9a9a9;
		text-align: center;
		color: #088A08;
		Font-weight: bold;
		}
		td.tres{
		Background: url(degradadolinea.jpg) repeat-x #a9a9a9;
		text-align: center;
		color: red;
		Font-weight: bold;
		}
		td.cuatro{
		Background: url(degradadolinea.jpg) repeat-x #a9a9a9;
		text-align: center;
		color: #DBA901;
		Font-weight: bold;
		}
		td.cinco{
		Background: url(degradadolinea.jpg) repeat-x #a9a9a9;
		text-align: center;
		color: yellow;
		Font-weight: bold;
		}
		td.seis{
		Background: url(degradadolinea.jpg) repeat-x #a9a9a9;
		text-align: center;
		color: blue;
		Font-weight: bold;
		}
		td.siete{
		Background: url(degradadolinea.jpg) repeat-x #a9a9a9;
		text-align: center;
		color: orange;
		Font-weight: bold;
		}
		td.ocho{
		Background: url(degradadolinea.jpg) repeat-x #a9a9a9;
		text-align: center;
		color: #FF00BF;
		Font-weight: bold;
		}
		</Style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script src="js/buscaminas.js" type="text/javascript"></script>
<script>
	var total = <?php echo (($_GET["ancho"]*$_GET["alto"])-$_GET["minas"]) ?>;
	$(document).ready(function(){
		codigo();
		bindings();
	});

</script>
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
<?php
$ancho=$_GET["ancho"];	
$alto=$_GET["alto"];
$minas=$_GET["minas"];
Buscaminas ($ancho, $alto, $minas);
function Buscaminas($ancho, $alto, $minas){
	if ($minas>=$ancho*$alto || $minas==0){
		exit;
	}
for ($t=0;$t<$ancho;$t++){
	for ($y=0; $y<$alto;$y++){
		$arr [$t][$y] = 0;
	}
}
while ($minas>0){
		$xminas= rand (0,$ancho-1);
		$yminas= rand (0,$alto-1);
		
if ($arr [$xminas][$yminas] != -1){
	$arr [$xminas][$yminas] = -1;
	$minas--;
	}
}
for ($i=0; $i<$ancho;$i++){
	for ($u=0; $u<$alto; $u++){
		if ($arr [$i][$u] == -1){
			if ($i>=1 && $arr [$i-1][$u]!=-1){
			$arr [$i-1][$u] = ($arr[$i-1][$u]+1);
			}
			if ($i>=1 && $u>=1 && $arr [$i-1][$u-1]!=-1 ){
			$arr [$i-1][$u-1] = ($arr[$i-1][$u-1]+1);
			}
			if ($i>=1 && $u<$alto-1 && $arr [$i-1][$u+1]!=-1){
			$arr [$i-1][$u+1] = ($arr[$i-1][$u+1]+1);
			}
			if ($u>=1 && $arr [$i][$u-1]!=-1 ){
			$arr [$i][$u-1] = ($arr[$i][$u-1]+1);
			}
			if ($u<$alto-1 && $arr [$i][$u+1] !=-1){
			$arr [$i][$u+1] = ($arr[$i][$u+1]+1);
			}
			if ($i<$ancho-1 && $arr [$i+1][$u]!=-1){
			$arr [$i+1][$u] = ($arr[$i+1][$u]+1);
			}
			if ($i<$ancho-1 && $u>=1 && $arr [$i+1][$u-1] !=-1){
			$arr [$i+1][$u-1] = ($arr[$i+1][$u-1]+1);
			}
			if ($i<$ancho-1 && $u<$alto-1 && $arr [$i+1][$u+1]!=-1){
			$arr [$i+1][$u+1] = ($arr[$i+1][$u+1]+1);
			}
		}
	}
}
//random de longitud de número
	function randomnum (){
		$veces = rand (2,7);
		$despues=1;
		for ($o=0; $o<$veces;$o++){
			$despues = $despues.rand(6,9);
		}
		return ($despues);
	}
	function randomnum2(){
		$veces2 = rand (2,7);
		$antes=1;
		for ($t=0; $t<$veces2;$t++){
			$antes = $antes.rand(0,4);
		}
		return ($antes);
	
	}


echo "</br><div class =\"titulo\" align = \"center\" >Hora de jugar!</div>";
echo "</br><div ><table class = \"tabla\" id=\"mitabla\" align = \"center\" border = \"15\" >";
for ($p =0; $p<$ancho; $p++){
	echo "<tr>";
	for ($e=0; $e<$alto; $e++){
		$tapa = "<td class = \"tapa\" width = '22' height = '24'><span class= \"celda\">";
		if ($arr[$p][$e] == -1){
		$tapa = "<td class = \"tapa\" width = '22' height = '24'><span class= \"celda\">";
		$despues =randomnum();
		$antes =randomnum2();
		
			echo $tapa.$antes.'94'.$despues."</span></td>";
		}
		else{
		if ($arr [$p][$e] == 0){
		$despues =randomnum();
		$antes =randomnum2();
		echo $tapa.$antes.'9'.$arr[$p][$e].$despues."</span></td>";
		}
		if ($arr [$p][$e] == 1){
		$despues =randomnum();
		$antes =randomnum2();
		echo $tapa.$antes.'8'.$arr[$p][$e].$despues."</span></td>";
		}
		if ($arr [$p][$e] == 2){
		$despues =randomnum();
		$antes =randomnum2();
		echo $tapa.$antes.'7'.$arr[$p][$e].$despues."</span></td>";
		}
		if ($arr [$p][$e] == 3){
		$despues =randomnum();
		$antes =randomnum2();
		echo $tapa.$antes.'6'.$arr[$p][$e].$despues."</span></td>";
		}
		if ($arr [$p][$e] == 4){
		$despues =randomnum();
		$antes =randomnum2();
		echo $tapa.$antes.'5'.$arr[$p][$e].$despues."</span></td>";
		}
		if ($arr [$p][$e] == 5){
		$despues =randomnum();
		$antes =randomnum2();
		echo $tapa.$antes.$arr[$p][$e].'2'.$despues."</span></td>";
		}
		if ($arr [$p][$e] == 6){
		$despues =randomnum();
		$antes =randomnum2();
		echo $tapa.$antes.$arr[$p][$e].'5'.$despues."</span></td>";
		}
		if ($arr [$p][$e] == 7){
		$despues =randomnum();
		$antes =randomnum2();
		echo $tapa.$antes.$arr[$p][$e].'3'.$despues."</span></td>";
		}
		if ($arr [$p][$e] == 8){
		$despues =randomnum();
		$antes =randomnum2();
		echo $tapa.$antes.$arr[$p][$e].'4'.$despues."</span></td>";
		}

	
		}
	}
	echo "</tr>";

}
echo "</table></div>";
}

?>	
</div>
    </body>
</html>    