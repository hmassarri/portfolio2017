$(document).ready(function() {
   
    // Intitialize the side-nav
    $(".button-collapse").sideNav();
    
    
    // Modal
    $('.modal').modal();
    $('#contact-modal').modal();
    
    
    //  Menu item active 
    switch ( $('body').attr('id')) {
        case "Blog":
            $('li#blog').addClass('active');
            break;
            
        case "Portfolio-Web":
            $('li#portfolio').addClass('active');
            break;
        
        case "Portfolio-Print":
            $('li#portfolio').addClass('active');
            break;
        
        case "Portfolio-Garage":
            $('li#portfolio').addClass('active');
            break;
            
        case "Tutorials":
            $('li#tutorials').addClass('active');
            break;
        
        case "Contact":
            $('li#contact').addClass('active');
            break;
    }


    // Carousel
    $('.carousel').carousel({
        dist: 0,
        duration: 300,
        indicators: false,
        noWrap: false
    });

    $('.carousel.carousel-slider').carousel({
        fullWidth: true
    });

    setInterval(function() {
        $('.carousel').carousel('next');
    }, 8000);


    // Scroll Reveal for gallery
    window.sr = ScrollReveal({
        reset: true
    });

    sr.reveal('.one', {
        origin: 'left',
        duration: 2000,

    });
    sr.reveal('.two', {
        origin: 'left',
        duration: 1000,

    });
    sr.reveal('.three', {
        origin: 'left',
        duration: 500,
    });

    sr.reveal('.four', {
        origin: 'left',
        duration: 2000,
    });
    sr.reveal('.five', {
        origin: 'left',
        duration: 1000,
    });
    sr.reveal('.six', {
        origin: 'left',
        duration: 500,
    });

    sr.reveal('.seven', {
        origin: 'left',
        duration: 2000,
    });
    sr.reveal('.eight', {
        origin: 'left',
        duration: 1000,

    });
    sr.reveal('.nine', {
        origin: 'left',
        duration: 500,
    });


    //Hover Menu Item
    $('#menu li.dropdown-button').hover( function() {
        $('#p-dropdown li').fadeIn();
    }, function() {
        $('#p-dropdown li').fadeOut();
    });
    
    
    // Scroll to in gallery
    $('#webLink').click(function() {
        $('html, body').animate({
            scrollTop: $('#web').offset().top
        }, 2000);
    });
    $('#garageLink').click(function() {
        $('html, body').animate({
            scrollTop: $('#garage').offset().top
        }, 2000);
    });
    
    
});


// Change color on the nav bar
$(window).scroll(function() {
$('.carousel, .carousel-slider').css('opacity', 1 - $(window).scrollTop() / 250);
    //$('.card1').css('opacity', 1 - $(window).scrollTop() / $('.card1').height() / 2);


    if ($(window).scrollTop() > 150) {
        $('nav').removeClass('white').addClass('pink accent-2').fadeIn(100);
        $('.brand-logo').removeClass('black-text').addClass('blue-text text-lighten-3');
        $('.link').removeClass('black-text').addClass('white-text');
        $('.button-collapse').removeClass('black-text').addClass('white-text');
        $('.side-nav').removeClass('white').addClass('pink accent-2');
    } else {
        $('nav').addClass('white').removeClass('pink accent-2').fadeIn(100);
        $('.brand-logo').removeClass('blue-text text-lighten-3').addClass('black-text');
        $('.link').removeClass('white-text').addClass('black-text');
        $('.button-collapse').removeClass('white-text').addClass('black-text');
        $('.side-nav').removeClass('pink accent-2').addClass('white');
    }

});