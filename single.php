<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jardinactivo
 */

get_header();
?>
<div id="content" class="container my-5 py-5">
    <div class="row">
        <div class="col-md-9">

<p>is single</p>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'jardinactivo' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'jardinactivo' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	</div><!-- .col-md-9-->
		<div class="col-md-3">
			<?php get_sidebar(); ?>				
		</div><!-- .col-md-3 -->
	</div><!-- row -->
</div><!-- #content -->

<?php
get_footer();
