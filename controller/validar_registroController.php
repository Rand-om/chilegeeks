<?php

require("model/validar_registroModel.php");

$vr = new validar_registro();
$res=$vr->buscarUsuarioExistente();

if($res == 0){
	$vr->ingresar_usuario();
}else{
	echo "Hubo un error, intentalo nuevamente";
}

require("view/validar_registro.phtml");

?>