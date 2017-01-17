/* ----------------- Start Document ----------------- */
(function($){
    $(document).ready(function(){

/*----------------------------------------------------*/
/*  Tabs
/*----------------------------------------------------*/

    var $tabsNav    = $('.tabs-nav'),
        $tabsNavLis = $tabsNav.children('li'),
        $tabContent = $('.tab-content');

    $tabsNav.each(function() {
        var $this = $(this);

        $this.next().children('.tab-content').stop(true,true).hide()
        .first().show();

        $this.children('li').first().addClass('active').stop(true,true).show();
    });

    $tabsNavLis.on('click', function(e) {
        var $this = $(this);

        if($tabsNavLis.length > 1 ) {
            $this.siblings().removeClass('active').end().addClass('active');
            $this.parent().next().children('.tab-content').stop(true,true).hide().siblings( $this.find('a').attr('href') ).fadeIn();
        }
        e.preventDefault();
    });


/*----------------------------------------------------*/
/*  Accordion
/*----------------------------------------------------*/

    var $accor = $('.accordion');

    $accor.each(function() {
        $(this).addClass('ui-accordion ui-widget ui-helper-reset');
        $(this).find('h3').addClass('ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all');
        $(this).find('div').addClass('ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom');
        $(this).find("div").hide().first().show();
        $(this).find("h3").first().removeClass('ui-accordion-header-active ui-state-active ui-corner-top').addClass('ui-accordion-header-active ui-state-active ui-corner-top');
        $(this).find("span").first().addClass('ui-accordion-icon-active');
    });

    $trigger = $accor.find('h3');

    $trigger.on('click', function(e) {
        var location = $(this).parent();

       if( $(this).next().is(':hidden') ) {
            $triggerloc = $('h3',location);
            $triggerloc.removeClass('ui-accordion-header-active ui-state-active ui-corner-top').next().slideUp(300);
            $triggerloc.find('span').removeClass('ui-accordion-icon-active');
            $(this).find('span').addClass('ui-accordion-icon-active');
            $(this).addClass('ui-accordion-header-active ui-state-active ui-corner-top').next().slideDown(300);
        }
        e.preventDefault();
    });



/*----------------------------------------------------*/
/*  Toggle
/*----------------------------------------------------*/

  /*  $(".toggle-container").hide();
    $(".trigger").toggle(function(){
        $(this).addClass("active");
        }, function () {
        $(this).removeClass("active");
    });
    $(".trigger").click(function(){
        $(this).next(".toggle-container").slideToggle();
    });

    $(".trigger.opened").toggle(function(){
        $(this).removeClass("active");
        }, function () {
        $(this).addClass("active");
    });

    $(".trigger.opened").addClass("active").next(".toggle-container").show();*/



/*----------------------------------------------------*/
/*  Alert Boxes
/*----------------------------------------------------*/


        $(".notification a.close").removeAttr("href").click(function(){
            $(this).parent().fadeOut(200);
        });


/* ------------------ End Document ------------------ */
});

})(this.jQuery);