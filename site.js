$(document).ready(function() {

	// $('#portfolio li a img').animate({'opacity' : 0.7}).hover(function() {      // On met l'opacité à 70% sur tous les projets
	// 		$(this).animate({'opacity' : 1});									// Au survol on la met à 100%
	// 		}, function() {
	// 		$(this).animate({'opacity' : 0.7});									// Et on la remet à 70% lors du mouseout
	// });

	
	$('#filtre li a').click(function() {					// On clique sur un filtre
		
		$('#filtre li').removeClass('active');				// Supprimer la classe "active" sur tous les liens du filtre
		$(this).parent().addClass('active');				// Ajouter la classe "active" sur le parent (li) du "a" cliqué
		
		var valeurFiltre = $(this).text().toLowerCase();	// On stocke dans une variable la valeur du lien cliqué, en minuscule
		
		$('#portfolio figure').hide();							// Cacher tous les projets
		
		if (valeurFiltre == 'tout') {						// On teste si le filtre appliqué est sur "tout"
            $('#portfolio figure').show('slow');  				// Alors on montre tous les projets
        }
		else {  
			// alert('hello');
			$('#portfolio figure').each(function() {			// Sinon c'est que l'on est dans une catégorie
				if(!$(this).hasClass(valeurFiltre)) {  		// On vérifie le "li" n'a pas la classe du filtre appliqué
                    $(this).hide('slow');					// On cache les projets qui n'ont pas cette classe
                } else {  
                    $(this).show('slow');  					// Sinon on les montre
                }  
			});
        }  

		return false;										// Bloque l'action initiale du lien
	});
	
	// $("#portfolio li a").lightBox();						// Effet lightbox sur les liens du portfolio
		
});