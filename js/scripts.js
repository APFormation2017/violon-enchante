// Scripts du thème
jQuery(function ($) {
    
    // Defilement doux haut de page
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Cible
			var speed = 650; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
   });
    
    //Ajouter classe au scroll
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            $(".js-scrollTo").addClass("affiche");
        } else {
            $(".js-scrollTo").removeClass("affiche");
        }
    });
    
	//Menu hamburger
	$( '#menu-hamburger' ).click(function(){
		$( '.noflex' ).toggleClass('cacher');
	});

});
