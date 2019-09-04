function session(){

			var nom = sessionStorage.getItem("username");
			if (sessionStorage.length != 0){ // si la session storage n'est pas vide, on affiche le username
			document.getElementById("login").innerHTML = "Vous êtes connecté sous le nom de " + nom;	
		} else {
			return;
		}
			
}

function login(){
var logindb=["toto","titi","tata"]; //bdd login
var passdb=["toto","titi","tata"];	//bdd mdp


var login = document.getElementById("username").value; // on récupère la valeur login du formulaire
var mdp = document.getElementById("pass").value; // on récupère la valeur mot du passe du formulaire

	for (var i = 0; i<3; i++) { // boucle pour parcourir la bdd login/pass
		if (logindb[i]==login && passdb[i]==mdp) {
			sessionStorage.setItem("username",login); // on stocke le login dans le session storage

			break;
		} 	
	}
				
}  