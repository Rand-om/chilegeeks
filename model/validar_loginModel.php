<?php

class validar_login {

	private $nick;
	private $pass;

	public function login(){

		$con = Coneccion::con();

		$this->nick = $_POST["nick"];
		$this->pass = $_POST["pass"];

		$sql = $con->query("select * from usuarios where nick='".$this->nick."' and contrasena='".$this->pass."' and contrasena_confirm='".md5($this->pass)."'");
		$filas = $sql->num_rows;
		if($filas == 0){
			echo "Datos inválidos";
		}else{
			while($reg=$sql->fetch_array()){
				$_SESSION["nombre"] = $reg["nombre"];
				$_SESSION["nick"] = $reg["nick"];
				$_SESSION["email"] = $reg["email"];
			}
			header("location: ?pag=home");
		}

	}

}

?>