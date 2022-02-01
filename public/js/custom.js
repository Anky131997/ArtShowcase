

$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar, #content, #footer').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
    $('#sidenavCollapse').on('click', function () {
        $('#sidebar, #content, #footer').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
    $('#sidebarClose').on('click', function () {
        $('#sidebar, #content, #footer').removeClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
    
    
    jQuery('.scroll_to').click(function(e){ 
        var jump = $(this).attr('href');    
        var new_position = $(jump).offset();
        $('html, body').stop().animate({ scrollTop: new_position.top }, 100);
        e.preventDefault();
    });
        
   
});