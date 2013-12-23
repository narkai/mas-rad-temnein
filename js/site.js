$(document).ready(function() {

	var load = false;
	
	var offset = $('.tome:last').offset();

	//

	$('#new_tome_form').on('submit', function() {

		var message = $('#add_area').val();
		var $form = $(this);

		if(message == '') {
		   console.log('empty field');
		   return false;

		} else {
			if(load == false){
				load = true;
				
			  	$.ajax({
			  		url: $form.attr('action'),
			  		type: $form.attr('method'),
			  		data: $form.serialize(),
			  		success: function(data) {
			  			$('.tome:first').parent().before(data);
			  			offset = $('.tome:first').offset();

			  			load = false;
			  		}
			  	});
			}
		}
		
		$("#add_area").val('');

		return false;
	});

	//
 
	$("#later").click(function() {
	
		//console.log("CLICK");
		
		if(load == false){
		
			load = true;
			var last_id = $('.tome:first').attr('id');
		
			$.ajax({
				url: 'lib/later.php',
				type: 'get',
				dataType: 'text',
				data: 'first='+last_id,
 
				success: function(data) {
					if(data == "") $("#later p").html("No more");
					$('.tome:first').parent().before(data);
					offset = $('.tome:first').offset();

					load = false;
				}
			});
		}
	});

	//
	$("#earlier").click(function() {	
		if(load == false){
		
			load = true;
			var last_id = $('.tome:last').attr('id');
		
			$.ajax({
				url: 'lib/earlier.php',
				type: 'get',
				dataType: 'text',
				data: 'last='+last_id,

				success: function(data) {
					if(data == "") $("#earlier p").html("No more");
					$('.tome:last').parent().after(data);
					offset = $('.tome:last').offset();
					load = false;
				}
			});
		}
	});

	//

	var num = 0;
    $('#text_count').text(num);

    $('#add_area').keyup(function () {
        num = $(this).val().length;
        $('#text_count').text(num);
    });

});

function alert() {
	alert('Hello world!');
}