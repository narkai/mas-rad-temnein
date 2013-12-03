$(document).ready(function() {

	//



	//

	var load = false;
	
	var offset = $('.bandit:last').offset();

	//
 
	$("#later").click(function() {
	
		//console.log("CLICK");
		
		if(load == false){
		
			load = true;
			var last_id = $('.bandit:first').attr('id');
		
			$.ajax({
				url: 'later.php',
				type: 'get',
				dataType: 'text',
				data: 'first='+last_id,
 
				success: function(data) {

					$('.bandit:first').parent().before(data);
					offset = $('.bandit:first').offset();

					load = false;
				}
			});
		}
	});

	//
	
	$("#earlier").click(function() {
	
		//console.log("CLICK");
		
		if(load == false){
		
			load = true;
			var last_id = $('.bandit:last').attr('id');
		
			$.ajax({
				url: 'earlier.php',
				type: 'get',
				dataType: 'text',
				data: 'last='+last_id,
 
				success: function(data) {

					$('.bandit:last').parent().after(data);
					offset = $('.bandit:last').offset();

					load = false;
				}
			});
		}
	});

	//

	var max = 140;
	var left = max;
    $('#text_count').text(left);

        $('#add_area').keyup(function () {

        left = max - $(this).val().length;

        if(left < 0){
            $('#text_count').addClass("overlimit");
        }

        if(left >= 0){
            $('#text_count').removeClass("overlimit");
        }

        $('#text_count').text(left);
    });

});

function alert() {
	alert('Hello world!');
}