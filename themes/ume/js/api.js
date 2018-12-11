(function($) {
    $(function() {
        const $play = $('.play'); //have to add a to have the location.hash
        const $coinNumber = $('.coins');
        const $downLoad = $('.download');

        $play.on('click', function(event){
            //on load 
            event.preventDefault();
            // let gameClicked = $(this); try .attr or .prop to get the data- attribute
            // <a href="#" data-score='1'>
            addCoins();//pass through gameClicked
            //TODO add window.location.hash (this.attr('href'));

        });

        $downLoad.on( 'click', function ( event ) {
            event.preventDefault();
            addDownloadCoins();
        } );

        function addCoins(id) {
            const site = ume_vars.rest_url + 'ume/v1/coins?id=' + id;
            $.ajax({
                method: 'POST',
                url: site,
                dataType: 'JSON',
            })
            .done(function(data){
                console.log(data);
                // $('.coins').empty();
                // $coinNumber.append(data);
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
            .done(function(data){
                console.log(data);
                // $('.coins').empty();
                // $coinNumber.append(data);
            })
            .fail(function(err){
                console.log(err);
            });
        }
    });//end of doc ready
})(jQuery);