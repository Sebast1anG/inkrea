$(function() {

	var form = $('#newsletterContact');

	$(form).submit(function(e) {

		e.preventDefault();

		var formData = $(form).serialize();

		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function() {
				$('#nEmail').val('');
				var $toastContent = $('<span>Zostałeś zapisany!</span>');
	  			Materialize.toast($toastContent, 5000);
		})
		.fail(function() {

			var $toastContent = $('<span>Proszę wpisać email!</span>');
  			Materialize.toast($toastContent, 5000);
		});

	});

});
