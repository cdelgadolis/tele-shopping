<?php
/**
 * Our Team section
 *
 * @package zerif-lite
 */

zerif_before_our_team_trigger();

$zerif_ourteam_show = get_theme_mod( 'zerif_ourteam_show' );

echo '<section class="our-team ' . ( ( is_customize_preview() && ( ! isset( $zerif_ourteam_show ) || $zerif_ourteam_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '" id="team">';

	zerif_top_our_team_trigger();

	echo '<div class="container">';

		echo '<div class="section-header">';

		echo '</div>';
?>

<center>
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
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="background:#7a7a7a;" align="center">
						<br><br>
						<h1>BANNER</h1>
						<br><br>1195PX  X  400PX<br><br>
					</div>
				</div>
				</div>
		</div>
</div>
</center>

<?php
	echo '</div>';

	zerif_bottom_our_team_trigger();

echo '</section>';

zerif_after_our_team_trigger();
