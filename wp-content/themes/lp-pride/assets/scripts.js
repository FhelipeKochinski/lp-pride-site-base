jQuery(document).ready(function() {

    /* Máscaras */

    jQuery(".telefone").mask("(00) 0000-0000");

    jQuery('.telefone').blur(function(event) {
    if(jQuery(this).val().length == 15){
        jQuery('.telefone').mask('(00) 00000-0009');
    } else {
        jQuery('.telefone').mask('(00) 0000-00009');
    }
    });

	/* Abre Menu */

	jQuery('#menuMobile').on('click', function() {
		jQuery('#header .boxMenu').addClass('ativo');
	})

	/* Fecha Menu */

	jQuery('#fechaMenuMobile').on('click', function() {
		jQuery('#header .boxMenu').removeClass('ativo');
	})

	/* Scroll Menu */

	$('a[href^="#"]').on('click', function(event) {

		var target = $( $(this).attr('href') );
	
		if( target.length ) {

			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top - 50
			}, 500);

			jQuery('#header .boxMenu').removeClass('ativo');
		}
	
	});

})


/*******************************
Slider Projetos
********************************/

jQuery('#projetosSlider ul.slider-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: false,
	centerMode: false,
	arrows: true,
	infinite: false,
	prevArrow:'<img src="https://prideengenharia.construtorapride.com.br/wp-content/uploads/2021/04/arrow-left.png" class="prevButton" alt="Anterior" />',
	nextArrow:'<img src="https://prideengenharia.construtorapride.com.br/wp-content/uploads/2021/04/arrow-right.png" class="nextButton" alt="Próximo" />',
	autoplay: false,
    asNavFor: '.slider-nav'
});

jQuery('#projetosSlider ul.slider-nav').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	dots: false,
	centerMode: false,
	arrows: false,
	infinite: false,
	autoplay: false,
    asNavFor: '.slider-for',
    focusOnSelect: true
});