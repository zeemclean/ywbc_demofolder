$(document).ready(function() {
	
	$('#name').focus(function() {
		 console.log('hello');
		// var self = $(this);
		// self.attr('background', 'yellow');
	});

	$('#name').blur(function() {
		var name = $(this).val();
		var nameLength = name.length;

		console.log('goodbye');

		if (nameLength <= 1) {
			console.log('wat');
		});
	});
});