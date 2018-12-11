(function($) {
    $(function() {
        const $play = $('.UnityFrame');

        $play.on('load', function(){
            let gameClicked = $(this).closest('article.game').data('id');
            addCoins(gameClicked);
        });

        $(window).on('load', function(){
            let wpcf7Elm = document.querySelector( '.wpcf7' );

            if(wpcf7Elm) {
               wpcf7Elm.addEventListener( 'wpcf7mailsent', function( ) {

                let queryStringParts = location.search.split('=');

                addDownloadCoins(queryStringParts[1]);

            }, false );
           } 

            
        });


        function addCoins(id) {
            const site = ume_vars.rest_url + 'ume/v1/coins?id=' + id;
            $.ajax({
                method: 'POST',
                url: site,
                dataType: 'JSON',
            })
            .fail(function(err){
                console.log(err);
            });
        }

        function addDownloadCoins(id) {
            const site = ume_vars.rest_url + 'ume/v3/coins?id=' + id;
            $.ajax({
                method: 'POST',
                url: site,
                dataType: 'JSON',
            })
            .fail(function(err){
                console.log(err);
            });
        }
    });//end of doc ready
})(jQuery);