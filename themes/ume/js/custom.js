(function($) {
    $(function() {
        const $play = $('.logo');
        const $popup = $('.popup');
        const $hidePopUp = $('.hide-div');
        
        // popup toggle
        
        if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $play.on('click', function() {
                $popup.toggle();
            }); //end of popup .onclick
            $hidePopUp.on('click', function() {
                $popup.hide();
            });
        } //end of if browsertype
        

        // flickity
        $('.main-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true
          }); // end of flickity

    }); //end of doc.ready
})(jQuery);
 //end of jquery