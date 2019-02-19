<?php
/**
 * Latest news section
 *
 * @package zerif-lite
 */

$zerif_latestnews_show = get_theme_mod( 'zerif_latestnews_show' );

$zerif_total_posts = get_option( 'posts_per_page' ); /* number of latest posts to show */

if ( ! empty( $zerif_total_posts ) && ( $zerif_total_posts > 0 ) ) :

	zerif_before_latest_news_trigger();

	echo '<section class="latest-news ' . ( ( is_customize_preview() && ( ! isset( $zerif_latestnews_show ) || $zerif_latestnews_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '" id="latestnews">';

	zerif_top_latest_news_trigger();

	echo '<div class="container">';

		/* SECTION HEADER */

		echo '<div class="section-header">';

			/* Title */

		echo '</div><!-- END .section-header -->';

		echo '<div class="clear"></div>';

		echo '<div id="carousel-homepage-latestnews">';

			/* Wrapper for slides */

		echo '<img src="http://localhost/tele-shopping/wp-content/uploads/2019/02/Captura-de-pantalla-de-2019-02-15-13-58-09.png" width="100%">';
		echo '</div><!-- .carousel-inner -->';

	echo '</div><!-- .container -->';

	zerif_bottom_latest_news_trigger();

	echo '</section>';

	zerif_after_latest_news_trigger();

endif;
