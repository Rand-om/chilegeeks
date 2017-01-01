<?php

class validar_registro {

	private $nombre;
	private $nick;
	private $email;
	private $pass;
	private $pass2;

	public function buscarUsuarioExistente(){

		$con = Coneccion::con();

		$this->nick = $_POST["nick"];
		$this->email = $_POST["email"];

		$sql = $con->query("select * from usuarios where nick='".$this->nick."' or email='".$this->email."'");
		return $sql->num_rows;

	}

	public function ingresar_usuario(){
		
		$con = Coneccion::con();

		$this->nombre = $_POST["nombre"];
		$this->nick = $_POST["nick"];
		$this->email = $_POST["email"];
		$this->pass = $_POST["pass"];
		$this->pass2 = md5($_POST["pass2"]);

		$sql = $con->query("insert into usuarios values(null,'".$this->nombre."','".$this->nick."','".$this->email."','".$this->pass."','".$this->pass2."',NOW())");

		if($sql){
			echo "Registro exitoso, ahora inicia sesión con tu nick y contraseña";
		}else{
			echo "Error en el registro, por favor, intentalo nuevamente";
		}
		mysqli_close($con);

	}

}

?>
