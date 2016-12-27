<?php

require("model/validar_registroModel.php");

$vr = new validar_registro();
$vr->datos();

require("view/validar_registro.phtml");

?>