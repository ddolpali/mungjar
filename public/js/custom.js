$(document).ready(function() {
    // Isotope + Masonry
    var $portfolio = $('.gallery_items');

    $portfolio.isotope({
        itemSelector: '.grid-item',
        layoutMode: 'masonry',
        filter: '*'
    });

    $('.filter-menu li').on('click', function() {
        $('.filter-menu li').removeClass('disabled');
        $(this).addClass('disabled');
        var selector = $(this).attr('data-filter');
        $portfolio.isotope({
            filter: selector,
        });
    });

    // Materialize
	$(".button-collapse").sideNav();
	$('.modal').modal();
    $('.datepicker').pickadate({
      selectMonths: true,
      selectYears: 15
    });

    // Smooth Smooth
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {

                window.location.hash = hash;
            });
        }
    });
});
