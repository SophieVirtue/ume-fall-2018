<?php 

/** 
* Custom API Endpoint
*
* @package UME
*
*/

add_action( 'rest_api_init', 'ume_rest_route' );


function ume_rest_route() {
    register_rest_route( 
        'ume/v1', 
        '/coins/',
        array(
            'methods' => 'POST',
            'callback' => 'ume_update_coins',
        )
    );
}

function ume_update_coins( $request ) {
    $game_id = $request->get_param( 'id' ); 
    $coins = CFS()->get( 'game_coins', $game_id );

    if( $coins == "" ){
        $coins = 1;
    } else {
        $coins += 1;
    }

    $field_data = array( 'game_coins' => $coins );
    $post_data = array( 'ID' => $game_id, 'post_type' => 'game' );

    CFS()->save( $field_data, $post_data );

    return $coins;
}


?>