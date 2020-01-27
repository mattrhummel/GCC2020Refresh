<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
* Template Name: Home
*/
get_header(); ?>

<?php get_template_part( 'template-parts/content', 'slider' );  ?>

<?php get_template_part( 'template-parts/content', 'promotions' );  ?>

<?php get_template_part( 'template-parts/content', 'pathways' );  ?>

 <?php if( get_field('success_section_heading') ): ?>
	
	<div id="success" class="row expanded gutter-small expanded">

		<div class="row">
		
		<h2 class="text-center"><?php the_field('success_section_heading'); ?></h2>
		<p  class="text-center"><?php the_field('success_section_text'); ?></p>
		

			<?php

							$this_post = $post->ID;
							$args =  array (
							'post_type' => 'success_stories',
							'posts_per_page'=>3,
							'order' => 'ASC',
				'orderby'        => 'rand',
				'post__not_in' => array($this_post)
							);
							// the query
			$the_query = new WP_Query( $args ); ?>
			<?php if ( $the_query->have_posts() ) : ?>
			<!-- pagination here -->
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<div class="small-12 medium-6 large-4 columns stories">
				
					<div class="card">
			
				<?php // ACF Image Object
							
					$image = get_field('story_image_home_thumb');
					// vars
					$url = $image['url'];
								
				?>

		 		<div class="stories-image" style=" background-image: url('<?php echo $url ?>');"></div> 
									
					<div class="card-section" data-equalizer-watch>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
			   
			   </div>
				
			</div>
			<?php endwhile; ?>
			<!-- end of the loop -->
			<!-- pagination here -->
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
		<div class="row expanded">
			<div class="small-12 small-centered text-center columns">
				<a href="<?php the_field('success_section_button_url'); ?>" class="text-center button primary" style="margin-top: 40px;"><?php the_field('success_section_button_text'); ?>
			
				</a>
		
		</div>
	</div>
</div>
	<?php endif; ?>



<?php get_template_part( 'template-parts/content', 'highlights' ); ?>

<?php get_footer();