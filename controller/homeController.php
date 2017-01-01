<?php

require("model/homeModel.php");

$du = new Usuario();
$nombre = $du->datosUsuario("nombre");
$nick = $du->datosUsuario("nick");
$email = $du->datosUsuario("email");

require("view/home.php");

?>