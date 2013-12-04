$(document).ready(function() {

	//



	//

	var load = false;
	
	var offset = $('.bandit:last').offset();

	//
	$('#new_bandit_form').on('submit', function() {
	
	       // je récupère les valeurs
	       var message = $('#add_area').val();
	     
	       if(message == '') {
	           console.log('Les champs doivent êtres remplis');
	       } else {
	           // appel Ajax
	           $.ajax({
	               url: $(this).attr('action'), // le nom du fichier indiqué dans le formulaire
	               type: $(this).attr('method'), // la méthode indiquée dans le formulaire (get ou post)
	               data: $(this).serialize(), // je sérialise les données (voir plus loin), ici les $_POST
	               success: function(data) { // je récupère la réponse du fichier PHP
	                   console.log(data); // j'affiche cette réponse

	                	$('.bandit:first').parent().before(data);
						offset = $('.bandit:first').offset();
	               }
	           });
	       }
	       return false; // j'empêche le navigateur de soumettre lui-même le formulaire
	   });
 
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