
	$("#validar_registro").on("click", function(e){

		var nombre = $("#nombre"),
			nick = $("#nick"),
			email = $("#email"),
			pass = $("#pass"),
			pass2 = $("#pass2");

		if(nombre.val() == ""){
			alert("Debe proporcionar un nombre");
			nombre.focus();
			return false;
		}else{
			nick.focus();
		}

		if(nick.val() == ""){
			alert("Debe proporcionar un nick");
			nick.focus();
			return false;
		}else{
			email.focus();
		}

		if(email.val() == ""){
			alert("Debe proporcionar un email");
			email.focus();
			return false;
		}else{
			pass.focus();
		}

		if(email.val().indexOf('@', 0) == -1 || email.val().indexOf('.', 0) == -1) {
            alert('El correo electrónico introducido no es correcto.');
            email.focus();
            return false;
        }else{
        	pass.focus();
        }

		if(pass.val() == ""){
			alert("Debe proporcionar una contraseña");
			pass.focus();
			return false;
		}else{
			pass2.focus();
		}

		if(pass.val() != pass2.val()){
			alert("Las contraseñas no coinciden");
			pass2.focus();
			return false;
		}else{
			document.registro.submit();
		}

	});

function vl(){
		var nick = $("#lnick"),
			pass = $("#lpass");

		if(nick.val() == ""){
			alert("Debe proporcionar su nick");
			nick.focus();
			return false;
		}else{
			pass.focus();
		}

		if(pass.val() == ""){
			alert("Debe proporcionar su contraseña");
			pass.focus();
			return false;
		}else{
			document.login.submit();
		}
	}