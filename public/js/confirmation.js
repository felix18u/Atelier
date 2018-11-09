function confirmValidate(){
    return confirm("Êtes-vous sur de vouloir valider ce coffret ? Un coffret validé ne peux plus être modifié");
}

function confirmSuppr(){
    return confirm("Êtes-vous sur de vouloir supprimer ce coffret ?");
}

function desactiver(id){
	document.getElementById(id).disabled = true;
}

function activer(id){
	document.getElementById(id).disabled = false;
}