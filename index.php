<?php

session_start();
require_once("config.php");
if(isset($_GET["pag"]) && !empty($_GET["pag"])){
	$pag = $_GET["pag"];
}else{
	$pag="inicio";
}

if(is_file("controller/".$pag."Controller.php")){
	require("controller/".$pag."Controller.php");
}else{
	require("controller/errorController.php");
}

?>