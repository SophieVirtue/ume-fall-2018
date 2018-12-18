<?php
/**
 * The template for displaying all pages.
 *
 * @package UME
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main prizes" role="main">
		<img class="prize-page-name" src="<?php echo get_template_directory_uri(); ?>/assets/images/pink-neon-words/prizes.png" alt="Prizes"/>	
        <h3>Earn more coins to win these prizes for your game!</h3>
        <div class="coin-legend">
            <div class="coin-winnings">
                <p class="coin-action">1 Play =</p>
                <img class="coin" src="<?php echo get_template_directory_uri(); ?>/assets/images/coin.png" alt="coins"/>
                <p class="coin-amount coin-space">x 1</p>
                <p class="coin-action">1 Download =</p>
                <img class="coin" src="<?php echo get_template_directory_uri(); ?>/assets/images/coin.png" alt="coins"/>
                <p class="coin-amount">x 5</p>
            </div>
        </div>
        <img class="prize-path" src="<?php echo get_template_directory_uri(); ?>/assets/images/prize-path.png" alt="Prizes to earn tree"/>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>