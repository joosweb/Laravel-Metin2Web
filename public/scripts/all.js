$(document).ready(function(){
		
	$('#login-user').submit(function(e) {

		e.preventDefault();

		var formData = {
            'usuario'              : $('#usuario').val(),
            'contrasena'           : $('#contrasena').val()
        };

		$.ajax({

            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'ajax/login.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true
        })

        .done(function(data) {

	        // log data to the console so we can see
        console.log(data);

	        // here we will handle errors and validation messages
	        if (!data.success) {

	            // handle errors for name ---------------
		            if (data.errors.usuario) {
		             $('form').append('<div class="alert alert-warning" style="width:40%; margin-top:1px; position:absolute;">' + data.errors.usuario + '</div>');
		         	}
		            // handle errors for email ---------------
		           	if (data.errors.contrasena) {
		             $('form').append('<div class="alert alert-warning" style="width:40%; margin-top:1px; position:absolute;">' + data.errors.contrasena + '</div>');
		           }
	        } else {
		            // ALL GOOD! just show the success message!
		            $('form').append('<div class="alert alert-success" style="width:40%; margin-top:1px; position:absolute;">' + data.message + '</div>');

		            // usually after form submission, you'll want to redirect
		            // window.location = '/thank-you'; // redirect a user to another page
		            alert('alert'); // for now we'll just alert the user

	        }

	    });
	});
});