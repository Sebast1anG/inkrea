$(function() {

	var form = $('#phoneContact2');

	$(form).submit(function(e) {

		e.preventDefault();

		var formData = $(form).serialize();

		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function() {
			$('#phone2').val('');
			var $toastContent = $('<span>Telefon został zapisany!</span>');
  			Materialize.toast($toastContent, 5000);
		})
		.fail(function() {
			var $toastContent = $('<span>Proszę wpisać numer!</span>');
  			Materialize.toast($toastContent, 5000);
		});

	});

});
