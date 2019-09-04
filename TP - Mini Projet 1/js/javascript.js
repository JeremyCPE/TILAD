function nom(){
	var url = window.location.search;

	var searchParams = new URLSearchParams(url);

	for(var pair of searchParams.entries()) {

	}

	if(pair[1] == "Australie"){
		var prix = 1200;
	}
	else if(pair[1] == "Thailande"){
		var prix = 800;
	}
	else if(pair[1] == "Japon"){
		var prix = 1000;
	}


	var titre = "Formulaire de réservation pour "+pair[1];
	document.getElementById("form_resa").innerHTML=titre;

	document.getElementsByName("dest")[0].value = pair[1];
	document.getElementsByName("prix")[0].value = prix;

}

function recap(){
	var url = window.location.search;

	var searchParams = new URLSearchParams(url);

	for(var pair of searchParams.entries()) {
		var tmp = document.getElementById("recap").innerHTML;
		document.getElementById("recap").innerHTML = tmp + "<br><p>" + pair[0] + " : " + pair[1] + "</p>";
		console.log(pair[0]+ ', '+ pair[1]); 
	}



}