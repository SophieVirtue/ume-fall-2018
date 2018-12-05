(function($) {
    $(function() {
        const $play = $('.logo');

        // popup toggle
        $play.on('click', function() {
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.popup').toggle();
        }
        }) //end of popup .onclick

        // flickity
        $('.main-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true
          }); // end of flickity

    }); //end of doc.ready
})(jQuery);
 //end of jquery