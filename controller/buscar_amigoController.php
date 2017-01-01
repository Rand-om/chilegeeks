<?php

require("model/buscar_amigoModel.php");

$obj = new Amigo();
$amigos = $obj->buscar_amigos();

for ($i=0; $i < sizeof($amigos); $i++) { 
	echo $amigos[$i]["nombre"]."(".$amigos[$i]['nick'].")<br>";
}

require("view/buscar_amigo.php");

?>