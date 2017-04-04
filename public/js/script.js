function ChargeDiv($data) {
	if($data == 'MisDatos') {
		$('#CambiarDatos').hide();
		$('#MisPersonajes').hide();
		$('#MisDatos').toggle().show('SLOW');
	}
	else if($data == 'CambiarDatos'){
		$('#MisDatos').hide();
		$('#MisPersonajes').hide();
		$('#CambiarDatos').toggle().show('SLOW');
	}
	else if($data == 'MisPersonajes'){
		$('#MisDatos').hide();
		$('#CambiarDatos').hide();
		$('#MisPersonajes').toggle().show('SLOW');
	}	
}

function Desbloquear($name){
	alert($name);
}