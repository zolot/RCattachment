function wResize() {
    var header_height = $('header').height();
    var window_height = $(window).height();
    $('.item').css('height', window_height-header_height);

    $('.title').each(function() {
        var title = $(this).find("h2");
        title_width = title.width();
        var body_width = $('body').width();
        var container_width = $('.container').width();
        /*var title_width = $('h2').width();*/    
        var line_width = (body_width - container_width)/2 + title_width;
        var min_line_width = 25 + title_width;
        $(this).find(".line").css('width', line_width);
        $(this).find(".line").css('min-width', min_line_width);
    });
    

};

$(window).load(function() {
    wResize();
});

$(document).ready(function() {
    // wResize();

    $(window).resize(function() {
        wResize();
    });

    $("<span class='arrov'>></span>").appendTo($(".products-menu .menu-item-has-children > a"));

    $("#about-us iframe").wrap("<div class='video-wrap'></div>");
    $(".video-wrap").fitVids();

	$("#slider-top").owlCarousel({
		items:1,
        responsive: false,
        animateOut: 'fadeOut',
      	loop:true,
        nav : true,
        navText: false,
        singleItem : true,     
        smartSpeed:1000,
        autoplay:true,
        autoplayTimeout:7000
      });



	
});