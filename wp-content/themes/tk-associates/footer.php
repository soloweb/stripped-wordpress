<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TK Associates
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'tk_associates_credits' ); ?>
			<a href="http://soloweb.com/" rel="generator"><?php printf( __( 'Designed by %s', 'tk-associates' ), 'Soloweb' ); ?></a>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>