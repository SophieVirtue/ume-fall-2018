(function($) {
    $(function() {
        const $play = $('.logo');

        $play.on('click', function() {
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.popup').toggle();
        }
        })
    }); //end of doc.ready
})(jQuery);
 //end of jquery