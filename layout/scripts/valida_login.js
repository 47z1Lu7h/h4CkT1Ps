with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Como piensa logearse sin nombre de usuario ?? :/");
			username.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Por favor escriba la contraseña hombre -.- !");
			password.focus();
		}
		if(ok){ submit(); }
	}
}
