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
		<div class="container bg-dark">
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
			</div><!-- row -->                        
            <!-- Bottom Footer Widget -->
            <?php if ( is_active_sidebar( 'bottom-footer' )) : ?>
                <div>
                    <?php dynamic_sidebar( 'bottom footer' ); ?>
                </div>
            <?php endif; ?>            
			<!-- Footer Widgets End -->
		</div><!-- container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
