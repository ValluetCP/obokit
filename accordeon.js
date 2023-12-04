$(document).ready(function() {

	// MENU ACCORDEON
	$('#accordeon dd').hide();
	$('#accordeon dt').click(function() {

    $('#accordeon dd').slideUp();  

        // condition : si il est caché
        if ($(this).next("dd").is(":hidden")) {
            
            // Celui qui a été cliqué, cible le dd après celui que je viens de cliquer
            $(this).next("dd").slideDown();
            $(this).addClass("current");

        } else {
            
            // Celui qui a été cliqué, cible le dd après celui que je viens de cliquer
        $(this).next("dd").slideUp();
        }

    // alert('hello');

		
    });
});