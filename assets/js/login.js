




function loginForm() {

	if ( document.forms['login']['username'].value == "" ) {

		alert("Please enter your username");

	} else if ( document.forms['login']['pass'].value == "" ) {

		alert("Please enter your password");

	} else {

		$.post("assets/php/login.php", {

		     username : document.forms['login']['username'].value,
		     password : document.forms['login']['pass'].value

		}, function(data,status) {

		     if (data) {


		     	var json = JSON.parse(data);

		     	if (json.message == "Valid User") {

		     		alert(json.message);
		     		document.forms['login']['username'].value = "";
		            document.forms['login']['pass'].value = "";
		            window.location.replace("console.php");

		     	} else {

		     		alert("Invalid user or password");

		     	}

		            
		            

		     }

		});

	}

	

}
function recoverForm() {
	
	$.post("assets/php/recover.php", {

	     token : document.forms['recover']['tokenid'].value

	}, function(data,status) {

	     if (data) {

	            alert(data);
	            document.forms['recover']['tokenid'].value = "";	             

	     } else {

	     	alert("Can not receive value");
	     }

	});
}
function signupForm() {

	// alert(document.forms['signup']['tokenid'].value + ':' +   document.forms['signup']['username'].value + ':' +   document.forms['signup']['pass'].value + ':' +   document.forms['signup']['repass'].value );
	
	if ( 	document.forms['signup']['tokenid'].value == "" ||
			document.forms['signup']['name'].value == "" ||
			document.forms['signup']['username'].value == "" ||
			document.forms['signup']['pass'].value == "" || 
		 	document.forms['signup']['repass'].value == "") {

		alert("Please typing");

	} else if (

			document.forms['signup']['pass'].value != document.forms['signup']['repass'].value) {

			alert("Password do not match");

	} else {

		$.post("assets/php/signup.php", {

		     token : document.forms['signup']['tokenid'].value,
		     name : document.forms['signup']['name'].value,
		     username : document.forms['signup']['username'].value,
		     password : document.forms['signup']['pass'].value		     

		}, function(data,status) {

		     if (data) {

		          // alert(data);

		          var json = JSON.parse(data);
	              
	              if (json.status == "error") {

	                alert( json.status + " : " + json.message + " : " + json.data.error );

	              } else {
	                
	                  	alert( json.message );
	                  	document.forms['signup']['tokenid'].value = "";
						document.forms['signup']['name'].value = "";
						document.forms['signup']['username'].value = "";
						document.forms['signup']['pass'].value = "";
					 	document.forms['signup']['repass'].value = "";
	                              
	              }
		     }

		});

	}
	
}