<?php
/**
 * Testimonials section
 *
 * @package zerif-lite
 */
echo '<br><br><div class="my-title"><b>LANZAMIENTOS</b> </div><br>';

$zerif_testimonials_show = get_theme_mod( 'zerif_testimonials_show' );

echo '<section class="testimonial>';

	zerif_top_testimonials_trigger();

	echo '<div class="container">';

		echo '<div class="section-header">';

		echo '</div>';

		if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '204', 'slug' ); }

			echo '</div>';

		echo '</div>';

	echo '</div>';

echo '</section>';
