$(function() {

	// Variables

	var liste 					= 	$('#liste');
	var hauteur_liste 			= 	liste.css('height','auto').height() + 'px';
	var hauteur_liste_cacher 	= 	'110px';
	var vitesse					= 	500;

	liste.css('height', hauteur_liste_cacher );

	$('#push').toggle(function() {

		liste.animate({ height: hauteur_liste }, vitesse);
		$(this).text('Cacher les produits'); }, function() {
		
		liste.animate({ height: hauteur_liste_cacher }, vitesse);
		$(this).text('Voir tous les produits');
		
		return false; // Annuler action initiale du lien
		
	});

}); // Fin de Jquery