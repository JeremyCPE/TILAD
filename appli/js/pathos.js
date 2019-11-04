
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
	var elements = document.getElementsByClassName("inputMer").item(0).elements;
	for(i=0;i < elements.length;i++){
		if(elements[i].checked==true)
		{
			listMeridien.push(elements[i].id)
		}
	}
	return listMeridien;
}