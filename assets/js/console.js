



function updatePassword () {

	// alert(document.forms['updatepass']['pass'].value + document.forms['updatepass']['repass'].value);

	if (document.forms['updatepass']['pass'].value == "" || document.forms['updatepass']['repass'].value == "" ) {

		alert("Please Enter Some Password");

	} else if (document.forms['updatepass']['pass'].value != document.forms['updatepass']['repass'].value) {

		alert("Password No Match");

	} else {

		// alert(document.forms['updatepass']['pass'].value);

		$.post("assets/php/setpass.php", {

		     pass : document.forms['updatepass']['pass'].value

		}, function(data,status) {

		     if (data) {

		            alert(data);	            

		     }

		});

	}

}



function  addServer () {
	// body...
	// alert(
	// 	document.forms['addserver']['servername'].value + 
	// 	document.forms['addserver']['serveraddress'].value +
	// 	document.forms['addserver']['servergroup'].value );

	if (
		document.forms['addserver']['servername'].value == "" ||
		document.forms['addserver']['serveraddress'].value == "" ||
		document.forms['addserver']['servergroup'].value == "" ) {

		alert("Please enter information");

	} else {

		$.post("assets/php/addserver.php", {

		     name : document.forms['addserver']['servername'].value,
		     address : document.forms['addserver']['serveraddress'].value,
		     group : document.forms['addserver']['servergroup'].value

		}, function(data,status) {

		     if (data) {

		            alert(data);
		            location.reload();	            

		     }

		});

	}	
}

$('.delete').click(function() {
	
   $.post("assets/php/deleteserver.php", {

	     name : $(this).closest('tr').find("td:eq(1)").text(),
	     address : $(this).closest('tr').find("td:eq(3)").text()

	}, function(data,status) {

	     if (data) {

	            alert(data);
	            location.reload();	            

	     }

	});

});


$('.deleteUser').click(function() {

	// alert($(this).closest('tr').find("td:eq(1)").text());
	
   $.post("assets/php/deleteuser.php", {

	     username : $(this).closest('tr').find("td:eq(1)").text()

	}, function(data,status) {

	     if (data) {

	            alert(data);
	            location.reload();	            

	     }

	});

});
