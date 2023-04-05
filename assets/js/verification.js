document.getElementById("form").addEventListener('submit', function(e){
	var err= document.querySelector("h3");
	if(document.getElementById("mdpc").value != document.getElementById("mdp").value){
		err.innerHTML= "le mot de passe ne correspond pas !";
		e.preventDefault();
		return false;
	}
	else{
		err.innerHTML= "";
		/*document.getElementById("form").addEventListener('submit', function(e){
            return true;
        });*/
	}
});
