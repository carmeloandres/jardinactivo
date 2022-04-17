<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jardinactivo
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="bg-dark">
		<div class="container">
			<div class="row">
				<!-- Footer 1 Widget -->
				<div class="col-md-6 col-lg-3">
					<?php if ( is_active_sidebar( 'footer-1' )) : ?>
						<div>
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
					<?php endif; ?>
				</div>

				<!-- Footer 2 Widget -->
				<div class="col-md-6 col-lg-3">
					<?php if ( is_active_sidebar( 'footer-2' )) : ?>
						<div>
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>
					<?php endif; ?>
				</div>

				<!-- Footer 3 Widget -->
				<div class="col-md-6 col-lg-3">
					<?php if ( is_active_sidebar( 'footer-3' )) : ?>
						<div>
							<?php dynamic_sidebar( 'footer-3' ); ?>
						</div>
					<?php endif; ?>
				</div>

				<!-- Footer 4 Widget -->
				<div class="col-md-6 col-lg-3">
					<?php if ( is_active_sidebar( 'footer-4' )) : ?>
						<div>
							<?php dynamic_sidebar( 'footer-4' ); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>                        
            <!-- Bottom Footer Widget -->
            <?php if ( is_active_sidebar( 'bottom-footer' )) : ?>
                <div class="text-center text-white pt-4">
                    <?php dynamic_sidebar( 'bottom footer' ); ?>
                </div>
            <?php endif; ?>            
			
			<!-- Footer Widgets End -->
		</div>
	</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jardinactivo' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'jardinactivo' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jardinactivo' ), 'jardinactivo', '<a href="http://carmeloandes.com">Carmelo Andrés</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
