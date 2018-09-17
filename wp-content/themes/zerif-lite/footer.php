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

<footer id="footer-wrap">
	<div class="container">
		<div id="prefooter-wrap">
					<div style="clear:both"></div>
					
					<!-- BEFIN COPYRIGHT INFO -->
					<div id="copyright-wrap">
						<div id="copyright-text">Copyright &copy; 2016 Сергей Леонидович Кузин. Все права защищены.</div>

						<div id="copyright-links"><a href="map.html">Карта сайта</a> &nbsp; / &nbsp; <a href="contacts.html">Контактная информация</a> &nbsp; / &nbsp; <a href="http://businessarchitecture.ru/">Поддержка сайта</a></div>
					</div>

					<!-- END COPYRIGHT INFO -->
				
				</div>
		
	</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->
<?php zerif_footer_widgets_trigger(); ?>
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
