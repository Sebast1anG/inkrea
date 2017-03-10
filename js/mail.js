$(function() {

	var form = $('#emailContact');

	$(form).submit(function(e) {

		e.preventDefault();

		var formData = $(form).serialize();

		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function() {
			
			$('#emailContact #name').val('');
			$('#emailContact #number').val('');
			$('#emailContact #email').val('');
			$('#emailContact #message').val('');

			var $toastContent = $('<span>Wiadomość została wysłana!</span>');
  			Materialize.toast($toastContent, 5000);
		})
		.fail(function() {
			var $toastContent = $('<span>Uzupełnij wszystkie dane!</span>');
  			Materialize.toast($toastContent, 5000);
		});

	});

});