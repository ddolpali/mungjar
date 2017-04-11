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
    $('.carousel').carousel();
});
