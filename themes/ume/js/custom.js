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
            let gameID = $(this).closest('.carousel-cell').data('id');
            $(this).closest('section').find('.drop-down[data-id="' + gameID + '"]').toggle();
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
 