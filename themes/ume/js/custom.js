(function($) {
    $(function() {
        const $play = $('.play');
        const $popup = $('.widget-area');
        const $carouselArrow = $('.carousel-cell .arrow');
        const $featureArrow = $('.featured-game .arrow');
        
        // popup toggle
        
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $play.on('click', function() {
                $popup.toggle();
            }); //end of popup .onclick
        }//end of if browsertype

        $carouselArrow.on('click', function() {
            let gameID = $(this).closest('.carousel-cell').data('id');
            $(this).closest('section').find('.drop-down[data-id!="' + gameID + '"]').hide();
            $(this).closest('section').find('.drop-down[data-id="' + gameID + '"]').toggle();
        });

        $('.main-carousel').blur( function() {
            $(this).closest('section').find('.drop-down').hide();
        });

        $featureArrow.on('click', function() {
            $(this).closest('.featured-game').find('.drop-down').toggle();
        })

        $featureArrow.blur(function(){
            $(this).closest('.featured-game').find('.drop-down').hide();
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
 