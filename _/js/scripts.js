$(document).ready(function() {
   
    //Intitialize the side-nav
    $(".button-collapse").sideNav();
    
    
    //Menu active
    $('#menu ul li').on('click', function(e) {
        $('#menu ul li.active').removeClass('active');
        $(this).addClass('active');
    });
    
    
    /*
    $('.toc-wrapper').pushpin({
        top: 190
    });
    $('.scrollspy').scrollSpy();
    */
    
    
    //Hover Menu Item
    $('#menu li.dropdown-button').hover( function() {
        $('#p-dropdown li').fadeIn();
    }, function() {
        $('#p-dropdown li').fadeOut();
    });
    
    
    
    
    
    
    
    
    
});