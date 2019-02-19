<?php
/**
 * About us section
 *
 * @package zerif-lite
 */

$zerif_aboutus_show = get_theme_mod( 'zerif_aboutus_show' );

echo '<section class="about-us ' . ( ( is_customize_preview() && ( ! isset( $zerif_aboutus_show ) || $zerif_aboutus_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '" id="aboutus">';

	zerif_top_testimonials_trigger();

	echo '<div class="container">';

	echo '<div class="section-header">';

	echo '</div>';

	zerif_top_about_us_trigger(); ?>

	<div class="row">
		<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
			<img src="http://localhost/tele-shopping/wp-content/uploads/2019/02/benjamin-voros-310026-unsplash.jpg">
			<br>
			<img src="http://localhost/tele-shopping/wp-content/uploads/2019/02/rahul-chakraborty-460018-unsplash-1.jpg">
		</div>

		<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
			<div class="row">
				<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
					<img src="http://localhost/tele-shopping/wp-content/uploads/2019/02/oliver-pecker-364272-unsplash-1.jpg">
				</div>
			</div>

			<br>
		</div>
		<div class="row">
		<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background:#7a7a7a;">
				<br><br>
				<h1>BANNER</h1>
				<br><br>1195PX  X  400PX<br><br>
			</div>
		</div>
		</div>
	</div>
</div>

<br>
</section> <!-- END ABOUT US SECTION -->

<?php zerif_after_about_us_trigger(); ?>
