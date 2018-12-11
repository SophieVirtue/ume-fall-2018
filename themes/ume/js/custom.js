(function($) {
    $(function() {
        const $play = $('.play');
        const $popup = $('.widget-area');
        const $carouselArrow = $('.carousel-cell .arrow');
        const $featureArrow = $('.featured-game .arrow');
        const $share = $('.share');
        
        // popup toggle
        
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $play.on('click', function(event) {
                event.preventDefault();
                $popup.toggle();
            }); //end of popup .onclick
            $(document).on( 'mouseup', function() {
                $popup.hide();
            } );
        }//end of if browsertype

        $carouselArrow.on('click', function() {
            let gameID = $(this).closest('.carousel-cell').data('id');
            $(this).closest('section').find('.drop-down[data-id!="' + gameID + '"]').hide();
            $(this).closest('section').find('.drop-down[data-id="' + gameID + '"]').toggle();
        });

        $(document).on('mouseup', function(event) {
       
            if((!$(event.target).is('.game-dropdown') )&&
    ($(event.target).parents('.game-dropdown').length === 0) ) {
                $('.drop-down').hide();
            }               
            });

        $featureArrow.on('click', function() {
            $(this).closest('.featured-game').find('.drop-down').toggle();
        })

        $featureArrow.blur(function(){
            $(this).closest('.featured-game').find('.drop-down').hide();
        });


        $share.on('click', function(event) {
            event.preventDefault();
            console.log('whooooo are you');
            // copyToClipboard();
        });

        // function copyToClipboard(element) {
        //     $("body").append($share);
        //     $share.val($(element).html()).select();
        //     document.execCommand("copy");
        //     console.log('who who who who');
        //     // $temp.remove();
        //    }

        // flickity
        $('.main-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            wrapAround: true
          }); // end of flickity

       


    }); //end of doc.ready
})(jQuery);
 //end of jquery
 