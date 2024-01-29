let button = document.querySelector("#btn_cadastro");

button.addEventListener("click", (e)=>{
	let username = document.querySelector('#username_cadastro').value;
	let password = document.querySelector('#password_cadastro').value;
	let password_confirm = document.querySelector('#password_again_cadastro').value;

	if (username.length < 10) {
		alert("Seu nome de usuário deve ter mais de 10 caracteres!")
		e.preventDefault();
	}else if(password.length && password_confirm.length < 8){
		alert('As senhas devem ter no mínimo 8 caracteres');
		e.preventDefault();
	}else if (password != password_confirm){
		alert("As senhas não correspondem!");
		e.preventDefault();
	}
});