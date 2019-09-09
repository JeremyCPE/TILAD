
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