$( document ).ready(function() {

	$('.js-form').on('click', function(){
		$(".mc__form").fadeOut(100);
    $("form").slideDown("slow",function (){
				 $("html, body").animate({ scrollTop: $(document).height() }, "slow");//scrolls to the textarea on smaller screens
    });
  });



	$('.bodybg img').on('click', function(){
		$('#subject').val('');
		$('#message').val('');
		$(".mc__form").fadeIn(100);
    $("form").slideUp("slow",function (){
			$('#form-messages').html('');
			$('#form-messages').removeClass('error success');
    });
	});


	$('#form-messages').on('click', function(){
		$('#subject').val('');
		$('#message').val('');
		$(".mc__form").fadeIn(100);
    $("form").slideUp("slow",function (){
			$('#form-messages').html('');
			$('#form-messages').removeClass('error success');
    });
	});



	/**********************************************************************

	Description:
	I use this for testing purposes when I'm making the site fluid.
	Comment out the p test line in the header.php fils as well as the
	var wi = $(window).width();
	$("p.testp").text('Initial screen width is currently: ' + wi + 'px.');
	and those in the resize function

	Parameters:
	N/A

	Returns:
	window width

	*************************************************************************/


	var wi = $(window).width();
	$("p.testp").text('Initial screen width is currently: ' + wi + 'px.');



	/**************************************************
	LISTENER: Resize

	Description:


	Parameters:
	N/A

	Returns:
	N/A

	**************************************************/

	$(window).resize(function() {




		/*Remove the lines below once you are done testing*/
		var wi = $(window).width();

		if (wi <= 576){
			$("p.testp").text('Screen width is less than or equal to 576px. Width is currently: ' + wi + 'px.');
			$('.neo__two-third').css({'margin-bottom':footerHeight});
			}
		else if (wi <= 680){
			$("p.testp").text('Screen width is between 577px and 680px. Width is currently: ' + wi + 'px.');
			}
		else if (wi <= 1024){
			$("p.testp").text('Screen width is between 681px and 1024px. Width is currently: ' + wi + 'px.');
			}
		else if (wi <= 1500){
			$("p.testp").text('Screen width is between 1025px and 1499px. Width is currently: ' + wi + 'px.');
			}
		else {
			$("p.testp").text('Screen width is greater than 1500px. Width is currently: ' + wi + 'px.');
			}

	});



	$(function() {
	$("#neu__ajax").attr("novalidate",true);
		// Get the form.
		var form = $('#neu__ajax');

		// Get the messages div.
		var formMessages = $('#form-messages');

		// Set up an event listener for the contact form.
		$(form).submit(function(e) {

			//Removes HTML tags from input textarea and outputs clean data on submit.  Prevents people from injecting bad stuff
			var text = $('#message').val();
	 		var cleanText = text.replace(/(<([^>]+)>)/ig,"");
	 		//console.log(cleanText);
	 		$('#message').val(cleanText);

			// Stop the browser from submitting the form.
			e.preventDefault();

			// Serialize the form data.
			var formData = $(form).serialize();



			// Submit the form using AJAX.
			$.ajax({
				type: 'POST',
				url: $(form).attr('action'),
				data: formData,
				success: function(data, textStatus) {
        	$("#form-messages").html(data);
    		},
			})

			.done(function(response) {
				// Make sure that the formMessages div has the 'success' class.

				$(formMessages).removeClass('error');
				$(formMessages).addClass('success');

				// Set the message text.
				$(formMessages).text(response);

				// Clear the form.
				$('#subject').val('');
				$('#message').val('');
			})
			.fail(function(data) {
				// Make sure that the formMessages div has the 'error' class.

				$(formMessages).removeClass('success');
				$(formMessages).addClass('error');

				// Set the message text.
				if (data.responseText !== '') {
					$(formMessages).text(data.responseText);
				} else {
					$(formMessages).text('Oops! An error occured and your message could not be sent.');
				}
			});

		});

	});
});
