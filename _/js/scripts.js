$(document).ready(function() {
   
    //Intitialize the side-nav
    $(".button-collapse").sideNav();
    
        
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
    
    
    //Hover Menu Item
    $('#menu li.dropdown-button').hover( function() {
        $('#p-dropdown li').fadeIn();
    }, function() {
        $('#p-dropdown li').fadeOut();
    });
    
    
    
    
    //Menu active
    /*
    $('#menu ul li').on('click', function(e) {
        $('#menu ul li.active').removeClass('active');
        $(this).addClass('active');
    });
    
    /*
    if ( $('body').attr('id') == "Blog" ) {
        $('li#blog').addClass('active');
    } else {
        $('li#blog').removeClass('active');
    }
    */
    
    /*
    $('.toc-wrapper').pushpin({
        top: 190
    });
    $('.scrollspy').scrollSpy();
    */
    
});