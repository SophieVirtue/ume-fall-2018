(function($) {
    $(function() {
        const $play = $('.play');
        const $popup = $('.popup');
        const $hidePopUp = $('.hide-div');
        const $arrow = $('.arrow');
        // const $dropDown = $('.drop-down');
        
        // popup toggle
        
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $play.on('click', function() {
                $popup.toggle();
            }); //end of popup .onclick
            $hidePopUp.on('click', function() {
                $popup.hide();
            });
        }//end of if browsertype

        $arrow.on('click', function() {
            console.log('works?');
            $(this).parents().eq(2).find('.drop-down').toggle();
            // $dropDown.toggle();
        });
        

        // flickity
        $('.main-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true
          }); // end of flickity

    }); //end of doc.ready
})(jQuery);
 //end of jquery
 