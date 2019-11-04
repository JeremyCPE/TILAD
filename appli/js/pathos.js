let allpatho;
const searchResult = document.getElementById('searchResult');


function displayData(list)
 {
	// traitement de la data pour l'afficher dans le HTML
	searchResult.innerHTML=list.map(function(currentElement)
		{
			return `
			<tr class="openabled">
				<td>${currentElement.desc	}</td>
				<td>${currentElement.type	}</td>
				<td>${currentElement.MeridienNom	}</td>
				<td>${currentElement.MeridienElement	}</td>
				<td>${(currentElement.MeridienYin==1)?"Yin":"Yang"	}</td>
			</tr>
			`
		}
	).join("");
}

window.addEventListener("load",async function(){
	var answer = await fetch("http://localhost/TIDAL/appli/?api=GetAllPatho");
	allpatho = await answer.json();	
}
)
var checkflag = false;
function check(id){
	var field = document.getElementById(id).getElementsByTagName("input");
	var ret= "Tout decocher";
	if (checkflag == false){
		for (i = 0; i < field.length; i++){
			field[i].checked = true;
		}
		checkflag = true;
	}
	else{
		for (i = 0; i < field.length; i++){
			field[i].checked = false;
		}
		checkflag = false;
		ret = "Tout cocher";
	}
	
	return ret;
}

function rechercherPatho(){
	var listPatho=[];
	var elements = document.getElementsByClassName("inputPatho").item(0).elements;
	
	for(i=0;i < elements.length;i++){
		if(elements[i].checked==true)
		{
			listPatho.push(elements[i].id)
		}
	}
	return listPatho;
}

function rechercherMeridien(){
	var listMeridien=[];
	var elements = document.getElementsByClassName("meridienCheckbox");
	for(i=0;i < elements.length;i++){
		if(elements[i].checked==true)
		{
			listMeridien.push(elements[i].id)
		}
	}
	return listMeridien;
}



function  rechercher(event)
{
	event.preventDefault();
	var lstPatho = rechercherPatho();
	var lstMeridien = rechercherMeridien();	
	displayData(allpatho);
	
}


function rechercherKeyword()
{
	var keyword = document.getElementsByName("keywords").item(0).value

}

        
