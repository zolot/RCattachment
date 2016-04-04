function wResize() {
    var header_height = 108;
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

    $('.popup').magnificPopup({
           mainClass: 'mfp-move-from-top', // this class is for CSS animation below
                   removalDelay: 300,
                   zoom: {
                       enabled: true, // By default it's false, so don't forget to enable it

                       duration: 1000, // duration of the effect, in milliseconds
                       easing: 'ease-in-out', // CSS transition easing function
                       removalDelay: 500, //delay removal by X to allow out-animation
                       callbacks: {
                           beforeOpen: function() {
                               // just a hack that adds mfp-anim class to markup 
                               this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                               this.st.mainClass = this.st.el.attr('data-effect');
                               this.content.addClass('mfp-removing');
                           }, 
                           beforeClose: function() {
                                   this.content.addClass('mfp-removing');
                               }
                           },
                           closeOnContentClick: true,
                           midClick: true,
                           // The "opener" function should return the element from which popup will be zoomed in
                           // and to which popup will be scaled down
                           // By defailt it looks for an image tag:
                           opener: function(openerElement) {
                           // openerElement is the element on which popup was initialized, in this case its <a> tag
                           // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                           return openerElement.is('img') ? openerElement : openerElement.find('img');
                           }
                       }
    });

   var $menu = $("header");

        $(window).scroll(function(){
                    if ( $(this).scrollTop() > 70 && $menu.hasClass("default") ){
                        $menu.fadeOut('fast',function(){
                            $(this).removeClass("default")
                                   .addClass("fixed transbg")
                                   .fadeIn('fast');
                        });
                    } else if($(this).scrollTop() <= 70 && $menu.hasClass("fixed")) {
                        $menu.fadeOut('fast',function(){
                            $(this).removeClass("fixed transbg")
                                   .addClass("default")
                                   .fadeIn('fast');
                        });
                    }
                });//scroll

                $menu.hover(
                    function(){
                        if( $(this).hasClass('fixed') ){
                            $(this).removeClass('transbg');
                        }
                    },
                    function(){
                        if( $(this).hasClass('fixed') ){
                            $(this).addClass('transbg');
                        }
                    });//hover


/*    $(".main").onepage_scroll({
       sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
       easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
                                        // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
       animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
       pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
       updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
       beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
       afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
       loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
       keyboard: true,                  // You can activate the keyboard controls
       responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
                                        // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
                                        // the browser's width is less than 600, the fallback will kick in.
       direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
    });
    */

   

    $('a[data-attribute]').click(function(e) {
        e.preventDefault();
        var data_attr = $(this).attr('data-attribute');
        var block = $('#descr-' + data_attr);
        block.addClass('show')

    });

     $('.close-descr').click(function(e) {
        e.preventDefault();
        $('.detal-descr').removeClass('show');

    });

    $(".tabs-wrap .tab").click(function() {
        $parent_container = $(this).closest(".tabs-wrap");
        $parent_container.find(".tab").removeClass("active");
        $(this).addClass("active");
        $parent_container.find(".tab-item").hide().eq($(this).index()).fadeIn();
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


(function($){
    $(window).load(function(){
        $("#menu a").mPageScroll2id({
          scrollSpeed: 700,
          scrollingEasing: 'easeOutQuad'
        });
    });
})(jQuery);
