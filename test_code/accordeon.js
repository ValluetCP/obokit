$(document).ready(function() {


    // Afficher les boutons "ouvrir tout" et "fermer tout"
    // $('#accordeon').before('<p class="aligncenter"><a id="ouvrir" href="#" class="btn btn-primary large m-3">Ouvrir tout</a><a id="fermer" href="#" class="btn large">Fermer tout</a></p>');

	// MENU ACCORDEON
	$('#accordeon dd').hide();

    // Si on souhaite que le premier soit dérouler automatique
	// $('#accordeon dt').first().addClass("current");
	// $('#accordeon dd').first().slideDown();

	$('#accordeon dt').click(function() {

    $('#accordeon dd').slideUp();  

        // condition : si il est caché
        if ($(this).next("dd").is(":hidden")) {
            
            // Celui qui a été cliqué, cible le dd après celui que je viens de cliquer
            $(this).next("dd").slideDown();
            $('#accordeon dt').removeClass("current");
            $(this).addClass("current");

        } else {
            
            // Celui qui a été cliqué, cible le dd après celui que je viens de cliquer
        $(this).next("dd").slideUp();
        $(this).removeClass("current");
        }

        
    });
    


    $('#ouvrir').click(function(){
        
        // alert('hello');
        $('#accordeon dt').addClass("current");
        $('#accordeon dd').slideDown();
        return false;
    });
    
    $('#fermer').click(function(){
        
        // alert('hello');
        $('#accordeon dd').slideUp();
        $('#accordeon dt').removeClass("current");
        return false;
    });
});