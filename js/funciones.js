$("#anombre, #anick, #aemail, #aemailv, #apass, #apass2nc, #lonick, #lopass, .busqueda").hide();

	var nombre = $("#nombre"),
			nick = $("#nick"),
			email = $("#email"),
			pass = $("#pass"),
			pass2 = $("#pass2");
	function inputSuccess(id){
		$("#"+id).addClass("uk-form-success");
	}

	function esconderAlerta(id){
		$("#"+id).hide();
	}

	$("#validar_registro").on("click", function(e){

		var nombre = $("#nombre"),
			nick = $("#nick"),
			email = $("#email"),
			pass = $("#pass"),
			pass2 = $("#pass2");

		if(nombre.val() == ""){
			nombre.removeClass("uk-form-success");
			nombre.addClass("uk-form-danger");
			$("#anombre").show();
			nombre.focus();
			return false;
		}else{
			$("#anombre").hide();
			$("#nombre").removeClass("uk-form-danger");
			$("#nombre").addClass("uk-form-success");
			nick.focus();
		}

		if(nick.val() == ""){
			nick.removeClass("uk-form-success");
			nick.addClass("uk-form-danger");
			$("#anick").show();
			nick.focus();
			return false;
		}else{
			$("#nick").removeClass("uk-form-danger");
			$("#nick").addClass("uk-form-success");
			$("#anick").hide();
			email.focus();
		}

		if(email.val() == ""){
			$("#aemail").show();
			email.removeClass("uk-form-success");
			$("#email").addClass("uk-form-danger");
			email.focus();
			return false;
		}else{
			$("#email").removeClass("uk-form-danger");
			$("#email").addClass("uk-form-success");
			$("#aemail").hide();
			pass.focus();
		}

		if(email.val().indexOf('@', 0) == -1 || email.val().indexOf('.', 0) == -1) {
			$("#email").removeClass("uk-form-success");
			$("#email").addClass("uk-form-danger");
            $("#aemailv").show();
            email.focus();
            return false;
        }else{
        	$("#email").removeClass("uk-form-danger");
        	$("#email").addClass("uk-form-success");
        	$("#aemailv").hide();
        	pass.focus();
        }

		if(pass.val() == ""){
			pass.removeClass("uk-form-success");
			$("#pass").addClass("uk-form-danger");
			$("#apass").show();
			pass.focus();
			return false;
		}else{
			$("#pass").removeClass("uk-form-danger");
			$("#pass").addClass("uk-form-success");
			$("#apass").hide();
			pass2.focus();
		}

		if(pass.val() != pass2.val()){
			pass2.removeClass("uk-form-success");
			$("#pass2").addClass("uk-form-danger");
			$("#apass2nc").show();
			pass2.focus();
			return false;
		}else{
			$("#pass2").removeClass("uk-form-danger");
			$("#pass2").addClass("uk-form-success");
			$("#apass2nc").hide();
			document.registro.submit();
		}

	});
$("#validar_login").on("click", function(e){
		var nick = $("#lnick"),
			pass = $("#lpass");

		if(nick.val() == ""){
			$("#lnick").addClass("uk-form-danger");
			$("#lonick").show();
			nick.focus();
			return false;
		}else{
			$("#lnick").removeClass("uk-form-danger");
			$("#lnick").addClass("uk-form-success");
			$("#lonick").hide();
			pass.focus();
		}

		if(pass.val() == ""){
			$("#lpass").addClass("uk-form-danger");
			$("#lopass").show();
			pass.focus();
			return false;
		}else{
			$("#lpass").removeClass("uk-form-danger");
			$("#lpass").addClass("uk-form-success");
			$("#lopass").hide();
			document.login.submit();
		}
});
	

$("#buscar").on("keyup", function(e){
	if($("#buscar").val().length > 0){
		$(".busqueda").show();

		$parametros = { inf: $("#buscar").val() };
		$.ajax({
			url: '?pag=buscar_amigo',
			method: 'post',
			data: $parametros,
			success: function(data){
				$(".busqueda").html(data);
			}
		});

	}else{
		$(".busqueda").hide();
	}
});