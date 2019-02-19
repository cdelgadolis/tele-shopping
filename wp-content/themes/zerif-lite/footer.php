<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 *
 * @package zerif-lite
 */

?>

</div><!-- .site-content -->

<?php zerif_before_footer_trigger(); ?>

<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

	<?php zerif_footer_widgets_trigger(); ?>

	<div class="container">

		<?php zerif_top_footer_trigger(); ?>

		<?php
			$footer_sections = 0;

		if ( current_user_can( 'edit_theme_options' ) ) {
			$zerif_address      = get_theme_mod( 'zerif_address', sprintf( '<a href="%1$s">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_address' ) ), __( 'Company address', 'zerif-lite' ) ) );
			$zerif_address_icon = get_theme_mod( 'zerif_address_icon', get_template_directory_uri() . '/images/map25-redish.png' );
		} else {
			$zerif_address      = get_theme_mod( 'zerif_address' );
			$zerif_address_icon = get_theme_mod( 'zerif_address_icon' );
		}

		if ( current_user_can( 'edit_theme_options' ) ) {
			$zerif_email      = get_theme_mod( 'zerif_email', sprintf( '<a href="%1$s">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_email' ) ), __( 'youremail@site.com', 'zerif-lite' ) ) );
			$zerif_email_icon = get_theme_mod( 'zerif_email_icon', get_template_directory_uri() . '/images/envelope4-green.png' );
		} else {
			$zerif_email      = get_theme_mod( 'zerif_email' );
			$zerif_email_icon = get_theme_mod( 'zerif_email_icon' );
		}

		if ( current_user_can( 'edit_theme_options' ) ) {
			$zerif_phone      = get_theme_mod( 'zerif_phone', sprintf( '<a href="%1$s">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_phone' ) ), __( '0 332 548 954', 'zerif-lite' ) ) );
			$zerif_phone_icon = get_theme_mod( 'zerif_phone_icon', get_template_directory_uri() . '/images/telephone65-blue.png' );
		} else {
			$zerif_phone      = get_theme_mod( 'zerif_phone' );
			$zerif_phone_icon = get_theme_mod( 'zerif_phone_icon' );
		}

			$zerif_socials_facebook  = get_theme_mod( 'zerif_socials_facebook' );
			$zerif_socials_twitter   = get_theme_mod( 'zerif_socials_twitter' );
			$zerif_socials_linkedin  = get_theme_mod( 'zerif_socials_linkedin' );
			$zerif_socials_behance   = get_theme_mod( 'zerif_socials_behance' );
			$zerif_socials_dribbble  = get_theme_mod( 'zerif_socials_dribbble' );
			$zerif_socials_instagram = get_theme_mod( 'zerif_socials_instagram' );

			$zerif_accessibility = get_theme_mod( 'zerif_accessibility' );
			$zerif_copyright     = get_theme_mod( 'zerif_copyright' );

			$zerif_powered_by = true;

		if ( ! empty( $zerif_address ) || ! empty( $zerif_address_icon ) ) {
			$footer_sections ++;
		}

		if ( ! empty( $zerif_email ) || ! empty( $zerif_email_icon ) ) {
			$footer_sections ++;
		}

		if ( ! empty( $zerif_phone ) || ! empty( $zerif_phone_icon ) ) {
			$footer_sections ++;
		}
		if ( ! empty( $zerif_socials_facebook ) || ! empty( $zerif_socials_twitter ) || ! empty( $zerif_socials_linkedin ) || ! empty( $zerif_socials_behance ) || ! empty( $zerif_socials_dribbble ) ||
			! empty( $zerif_copyright ) || ! empty( $zerif_powered_by ) || ! empty( $zerif_socials_instagram ) ) {
			$footer_sections ++;
		}

		if ( $footer_sections == 1 ) {
			$footer_class = 'col-md-12';
		} elseif ( $footer_sections == 2 ) {
			$footer_class = 'col-md-6';
		} elseif ( $footer_sections == 3 ) {
			$footer_class = 'col-md-4';
		} elseif ( $footer_sections == 4 ) {
			$footer_class = 'col-md-3';
		} else {
			$footer_class = 'col-md-3';
		}

		if ( ! empty( $footer_class ) ) {

			/* COMPANY ADDRESS */
			if (  empty( $zerif_address_icon ) ||  empty( $zerif_address ) ) {
				echo '<div class="col-md-3 company-details">';

				echo "<img src='http://localhost/tele-shopping/wp-content/uploads/2019/02/logo-fondo-gris.png'> <br>";

				echo '<h3><b> (598) 2706777 </b></h3><br>';

				echo "<h3> 12 cuotas sin recargo </h3><br>";

				echo "<h7>Contado, contrareembolso ó tarjeta de crédito</h7>";

				echo '</div>';
			}

			/* COMPANY EMAIL */
			if (  empty( $zerif_email_icon ) ||  empty( $zerif_email ) ) {
				echo '<div class="col-md-3 company-details">';

				echo ' <b>Categorías</b><br><br>
				<a href="#">Belleza</a><br><br>
				<a href="#">Salud</a><br><br>
				<a href="#">Fitness</a><br><br>
				<a href="#">Cocina</a><br><br>
				<a href="#">Hogar y Herramientas</a><br><br>
				<a href="#">Lanzamientos</a><br>';

				echo '</div>';
			}

			/* COMPANY PHONE NUMBER */
			if (  empty( $zerif_phone_icon ) ||  empty( $zerif_phone ) ) {
				echo '<div class="col-md-3 company-details">';

				echo ' <b>Mi Cuenta</b><br><br>
				<a href="#">Mi cuenta</a><br><br>
				<a href="#">Checkout</a><br><br>
				<a href="#">Contacto</a><br><br>
				<a href="#">Preguntas frecuentes</a><br><br>
				<a href="#">Carrito</a><br><br>';
				echo '</div>';
			}
		}

			// open link in a new tab when checkbox "accessibility" is not ticked
			$attribut_new_tab = ( isset( $zerif_accessibility ) && ( $zerif_accessibility != 1 ) ? ' target="_blank"' : '' );

		if ( ! empty( $zerif_socials_facebook ) || ! empty( $zerif_socials_twitter ) || ! empty( $zerif_socials_linkedin ) || ! empty( $zerif_socials_behance ) || ! empty( $zerif_socials_dribbble ) ||
			! empty( $zerif_copyright ) || ! empty( $zerif_powered_by ) || ! empty( $zerif_socials_instagram ) ) {

			echo '<div class="col-md-3 copyright">';

			echo "
			<b>Seguinos</b><br><br>

			<img src='http://localhost/tele-shopping/wp-content/uploads/2019/02/redes-sociales.png'><br><br><br>

			<b>Descargas</b><br><br>

			<img src='http://localhost/tele-shopping/wp-content/uploads/2019/02/catalogo.png'><br>";

			echo '</div>';

		}

		zerif_bottom_footer_trigger();
		?>
	</div> <!-- / END CONTAINER -->
	<div class='prueba' align='left'>
  <img src='http://localhost/tele-shopping/wp-content/uploads/2019/02/pago.png'><br><br>
  <a href=''>Terminos y condiciones</a></div>

</footer> <!-- / END FOOOTER  -->

<?php zerif_after_footer_trigger(); ?>

	</div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->

<?php
/**
 *  Fix for sections with widgets not appearing anymore after the hide button is selected for each section
 */

if ( is_customize_preview() ) {

	if ( is_active_sidebar( 'sidebar-ourfocus' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-ourfocus' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-aboutus' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-aboutus' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-ourteam' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-testimonials' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-testimonials' );
		echo '</div>';
	}
}

?>

<?php wp_footer(); ?>

<?php zerif_bottom_body_trigger(); ?>

</body>

</html>
