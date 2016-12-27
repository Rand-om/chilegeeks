<?php

class validar_registro {

	private $nombre;
	private $nick;
	private $email;
	private $pass;
	private $pass2;

	public function datos(){
		
		$con = Coneccion::con();
		$this->nombre = $_POST["nombre"];
		$this->nick = $_POST["nick"];
		$this->email = $_POST["email"];
		$this->pass = $_POST["pass"];
		$this->pass2 = md5($_POST["pass2"]);

		$sql = $con->query("insert into usuarios values(null,'".$this->nombre."','".$this->nick."','".$this->email."','".$this->pass."','".$this->pass2."',NOW())");

		if($sql){
			echo "Exito";
		}else{
			echo "error";
		}
		mysqli_close($con);

	}

}

?>
