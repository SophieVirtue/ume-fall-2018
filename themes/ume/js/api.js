(function($) {
    $(function() {
        const $play = $('.play'); //have to add a to have the location.hash

        $play.on('click', function(event){
            event.preventDefault();
            // let gameClicked = $(this); try .attr or .prop to get the data- attribute
            // <a href="#" data-score='1'>
            addCoins();//pass through gameClicked
            //TODO add window.location.hash (this.attr('href'));

        });

        function addCoins(id) {
            const site = ume_vars.rest_url + 'ume/v1/coins?id=126' + id;
            $.ajax({
                method: 'POST',
                url: site,
                dataType: 'JSON',
            })
            .done(function(data){
                console.log(data);
                // $('.coins').append(data);
            })
            .fail(function(err){
                console.log(err);
            });
        }
    });//end of doc ready
})(jQuery);