function Send () {
	let email = document.getElementById('email').value ;
	let passe = document.getElementById('passe').value ; 

	let div = document.getElementById('ma_div');

	let url = "api.php";
	let text = 'email='+ email + '&passe='+ passe;

	let HTTP = new XMLHttpRequest();

	HTTP.open("Post", url, true);
	HTTP.setRequestHeader("content-type", "application/x-www-form-urlencoded") ;

	HTTP.onreadystatechange = function () 
	{
		if(HTTP.readyState === 4 && HTTP.status === 200) 
		{
	  		div.innerHTML = this.responseText;
		}
	};

	HTTP.send(text);


	

}