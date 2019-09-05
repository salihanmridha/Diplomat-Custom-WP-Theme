/****************************************************************************************
 Universal - Smart multi-purpose html5 template
 To use this template you must have a license purchased at Themeforest (themeforest.com)
 Copyright 2016 ForBetterWeb.com
 ***************************************************************************************/

(function($){
    "use strict";
    /*Contact form submission*/

    $('#contact-form-id').on('submit', function(e){
      e.preventDefault();
      var form = $(this),
      		ajaxurl = form.data('url'),
      		name = form.find('#your-name').val(),
      		email = form.find('#your-email').val(),
      		subj = form.find('#subject').val(),
      		msg = form.find('#contact-message').val();

      if (name == '' || email == '' || msg == '' || subj == '') {
      	//console.log('Required Field is empty');
      	form.find('#msg_deliver').addClass('alert alert-danger');
      	form.find('#msg_deliver').html('<strong> Required </strong> Field is empty');
      	return;
      }

      form.find('input, textarea, button').attr('disabled', 'disabled');


      $.ajax({
      	url: ajaxurl,
      	type: "POST",

      	data : {
      		name : name,
      		email : email,
      		subj : subj,
      		msg : msg,
      		action : 'send_contact_frm'
      	},

      	error : function(response){
      		console.log(response);
      	},

      	success : function(response){
      		//console.log(response);
      	},
      });
      //confirmation message to user
      if (form.find('.alert').length > 0) {
      	form.find('#msg_deliver').removeAttr('class');
      	form.find('#msg_deliver').addClass('alert alert-success');
      } else {
      	form.find('#msg_deliver').addClass('alert alert-success');
      }
      form.find('#msg_deliver').html('<strong> Success! </strong> Your Message Successfully Sent.');
    });
})(jQuery);
