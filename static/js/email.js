function send(){

	var nombre = document.formu.nombre.value;
	var motivo = document.formu.motivo.value;

	if(nombre.lenght < 5){
		alert("Por favor ingresa tu nombre completo");
		return false;
	}

	if (motivo.lenght == "") {
		alert("Por favor ingresa el motivo de tu contacto");
		return false;
	}
	return true;
