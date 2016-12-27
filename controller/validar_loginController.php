<?php

require("model/validar_loginModel.php");

$vl = new validar_login();
$vl->login();

require("view/validar_login.phtml");

?>