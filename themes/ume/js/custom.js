(function($) {
    $(function() {
        const $play = $('.play');
        const $popup = $('.widget-area');
        const $carouselArrow = $('.carousel-cell .arrow');
        const $searchArrow = $('.search-arrow');
        const $share = $('.share a');
        
        // play game only on laptop
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $play.on('click', function(event) {
                event.preventDefault();
                $popup.toggle();
            }); //end of popup .onclick
            $(document).on( 'mouseup', function(event) {
                event.preventDefault();
                $popup.hide();
            } );
        }//end of if browsertype

        
        //toggle dropdown on front page
        let dropDownShowing = false
        $carouselArrow.on('click', function() {
            let gameID = $(this).closest('.carousel-cell').data('id');
            $('.drop-down[data-id!="' + gameID + '"]').hide();
            if (!dropDownShowing){
            $(this).closest('section').find('.drop-down[data-id="' + gameID + '"]').show();
            dropDownShowing = true;
            $(this).closest('.category').addClass('padding');
        }
        else {
            if ($('.drop-down[data-id="' + gameID + '"]').is(':visible')){
                $(this).closest('section').find('.drop-down[data-id="' + gameID + '"]').hide();
                dropDownShowing = false;
                $(this).closest('.category').removeClass('padding'); 
            } else {
                $(this).closest('section').find('.drop-down[data-id="' + gameID + '"]').show();  
            }  
        }    
        });

        //toggle dropdown on search page 
        $searchArrow.on('click', function(){
            let gameID = $(this).closest('article').data('id');
            $('.drop-down[data-id!="' + gameID + '"]').hide();
            if (!dropDownShowing){
            $(this).closest('section').find('.drop-down[data-id="' + gameID + '"]').show();
            dropDownShowing = true;
            $(this).closest('.search-game').addClass('padding');
        }
        else {
            if ($('.drop-down[data-id="' + gameID + '"]').is(':visible')){
                $(this).closest('section').find('.drop-down[data-id="' + gameID + '"]').hide();
                dropDownShowing = false;
                $(this).closest('.search-game').removeClass('padding'); 
            } else {
                $(this).closest('section').find('.drop-down[data-id="' + gameID + '"]').show();  
            }  
        } 
        });

        //hide dropdown when not clicking in the actual dropdown
        $(document).on('mouseup', function(event) {
            if((!$(event.target).is('.drop-down') ) &&
            ($(event.target).parents('.drop-down').length === 0) ) {
                if((!$(event.target).is('.arrow-img') )) {
                    $('.drop-down').hide();
                    dropDownShowing = false;  
                    $('.search-game').removeClass('padding');
                    $('.category').removeClass('padding');  
                }    
            }    
        });

        //copy game link to clipboard
        $share.on('click', function(event) {
            event.preventDefault();
            $(this).next('.hidden-copy').focus().select();
            document.execCommand('copy');
            $('<p style="color:white; font-size: 14px">Link saved to Clipboard!</p>').appendTo($share).delay(1000).hide(1000);
        });

        // flickity carousel front page
        $('.main-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            wrapAround: true
          }); // end of flickity

        
        // hamburger menu
        const $openSlideMenu = $('.btn-open');
        const $closeSlideMenu = $('.btn-close');

        $openSlideMenu.on('click', function() {
            document.getElementById('side-menu').style.width = '100%';
        })

        $closeSlideMenu.on('click', function() {
            document.getElementById('side-menu').style.width = '0%';
        }) // end of hamburger menu

 
    }); //end of doc.ready
})(jQuery);
 //end of jquery
 