function checkPassword(){
	if(document.getElementById("pwd").value!=document.getElementById("confirm").value){
		alert("Password Mismatch !");
		return false;
	}
	else{
		return true;
	}
}

function checkCode(){
	if(document.getElementById("code").value.length != 5) {
		alert("Invalid Code!");
		return false;
	} 
	else {
		return true;
	}
}


function cardCheck(){
	if(document.getElementById("no").value.length != 16) {
		alert("Invalid Card No!");
		return false;
	} 
	else {
		return true;
	}
}


function cvcCheck(){
	if(document.getElementById("cvc").value.length != 3) {
		alert("Invalid cvc !");
		return false;
	} 
	else {
		return true;
	}
}
