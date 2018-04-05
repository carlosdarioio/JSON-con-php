<html>	

<body>
<div id="contenido"></div>
Ejemplo utilizando Json con php



<?php
//utilizando json_decode y json_decode

$input ='
{"nombre":"Fulano de tal",
 "edad": 27,
 "frutas":["coco","naranja","mango"]
 }
';

$datos=json_decode($input);

//imprimiendo informacion en formato objeto
echo $datos->nombre;
echo "<br>";
echo $datos->edad;
echo "<br>";
echo $datos->frutas[0];

//recibiendo informacion en formato asociativo
$datos = json_decode ($input, true);
foreach($datos as $k=>$v){
	echo "$k => $v <br>";
	
}

//mostrando datos del array dentro de array
foreach($datos['frutas'] as $k=>$v){
	echo "$k => $v <br>";
	
}

//convirtiendo valores a formato json
var_dump($datos);



 ?>
</body>

</html>	

