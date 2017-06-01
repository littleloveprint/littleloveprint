$(document).ready(function(){

	/* Begin validation*/
	$("#contact-form").validate({

		// setup handling of form errors
		debug: true,
		errorClass: "alert alert-danger",
		errorLabelContainer: "#output-area",
		errorElement: "div",

		// Rules define what is good/bad input.
		// Each rule starts with the form input element's NAME attribute.
		rules: {
			name: {
				required: true
			},
			email: {
				email: true, // Checks if the email entered is valid.
				required: true
			},
			message: {
				required: true,
				minlength: 5,
				maxlength: 1000
			}
		},

		// Error messages to display to the end user
		messages: {
			name: {
				required: "Please enter your name."
			},
			email: {
				email: "Please enter a valid email address.",
				required: "Please enter an email address."
			},
			message: {
				required: "Please enter a message.",
				minlength: "You must enter at least 5 characters.",
				maxlength: "1000 character max."
			}
		},

		submitHandler: function(form) {
			$("#contact-form").ajaxSubmit({
				type: "POST",
				url: $("#contact-form").attr("action"),

				success: function(ajaxOutput) {
					// clear the output area's formatting
					$("#output-area").css("display", "");

					// write the server's reply to the output area
					$("#output-area").html(ajaxOutput);

					// reset the form if it was successful
					if($(".alert-success").length >= 1) {
						$("#contact-form")[0].reset();
					}
				}
			})
		}

	});/* end validate function */

});/*end document.ready()*/