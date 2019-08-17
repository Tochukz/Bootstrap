$(document).ready(function(){
	$('#form').on('submit', function(e){
		e.preventDefault();
		var $form = $(e.currentTarget),
			$email= $form.find('#email'),
			$button = $form.find('input[type=submit]');

			if($email.val().indexOf('@')==-1){
				//vaca = $email.closest('.form-group');
				$email.closest('.form-group').addClass('has-error');
			}else{
				$form.find('.form-group').addClass('has-success').removeClass('has-error');
				$button.attr('disabled', 'disabled');
				$button.after('<span>Message sent, we will contact you soon</span>');
			}
	});
	$('#signin-btn').on('click',function(e){
		$(e.currentTarget).closest('ul').hide();
		$('#signin-form').fadeIn('fast');
	});
});