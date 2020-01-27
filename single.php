<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package gccwp-2018
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	while ( have_posts() ) : the_post(); ?>
	<header class="hero-section">
		<?php //if the child page doesn't have a featured images
		//gcc_featured_image_on_child(); ?>
		<div class="row expanded hero-section-text">
			<div class="row header-content">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<p><?php the_date(); ?></p>
				<div class="crumbs-container">
					<nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
						<?php custom_breadcrumbs();?>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="row expanded content-area">
		
		<div class="row">
			
			<?php get_sidebar();?>
			<div class="small-12 medium-9 entry-content" id="main" tabindex="0">
				<div class="entry-content" id="main" tabindex="0">
					<?php
					the_content( sprintf(
					wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcc-wp-2018' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
					),
					get_the_title()
					)
					); 
					?>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; // End of the loop. ?>
</article>
<?php
get_footer();