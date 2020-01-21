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

<div class="row column expanded no-gutter hero">
<?php
		//begin home slide repeater loop, checks for slides
if ( have_rows( 'slide_item', 'options' ) ) : ?>
<div class="owl-carousel">


<?php
//while there are slide items
while ( have_rows( 'slide_item', 'options' ) ) : the_row(); ?>
			<?php // ACF Image Object
	
		    $image = get_sub_field('slide_image');
			// vars
			$url = $image['url'];
		
?>

	<div class="item" style="background-image: url('<?php echo $url ?>');">
		
		<div class="gradient-overlay-dark"></div>

		<div class="row">

			<div class="item-content columns small-12 medium-10 large-8">
				<h1><?php the_sub_field( 'slide_heading' ); ?>
				</h1>
				<div><?php the_sub_field( 'slide_text' ); ?></div>
				<a href="<?php the_sub_field( 'slide_button_url' ); ?>" class="button primary"><?php the_sub_field( 'slide_button_text' ); ?></a>
			</div>

		</div>

		
	</div>

		<?php endwhile; ?>
		</div>  <!--.owl-carousel-->
		<?php endif; ?>
		
</div>
<?php get_template_part( 'template-parts/content', 'promotions' );  ?>

<?php if ( get_field( 'announcement_heading', 'options' ) ) : ?>

	<div class="row expanded no-gutter announcement align-space">	
		<div class="callout text-center">
			<div class="column small-12 small-centered">
				<h2><?php echo get_field( 'announcement_heading', 'options' ); ?></h2>
				<div><?php echo get_field( 'announcement_text', 'options' ); ?>
				</div>
				<a href="<?php echo get_field( 'announcement_button_url', 'options' ); ?>" class="button primary"><?php echo get_field( 'announcement_button_text', 'options' ); ?></a>
			</div>
		</div>
	</div><!--.announcement-->

	<?php endif; ?>
	<?php get_template_part( 'template-parts/content', 'pathways' );  ?>
	<?php get_template_part( 'template-parts/content', 'getstarted' ); ?>
	<?php if( get_field('success_section_heading') ): ?>
	
	<div id="home-video" class="row expanded gutter-small expanded">

		<div class="row">
		
		<h2 class="text-center"><?php the_field('success_section_heading'); ?></h2>
		<p  class="text-center"><?php the_field('success_section_text'); ?></p>
		<div class="row expanded">
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
			<div class="small-12 medium-12 large-4 columns">
				<a href="<?php the_permalink(); ?>" class="stories">
					<div class="card">
						<?php // ACF Image Object
					$image     = get_field( 'story_image_home_thumb' );
							// vars
					$url = $image['url'];
					$alt = $image['alt'];
					// thumbnail
					$size = 'medium';
					$thumb = $image['sizes'][ $size ];
					$width = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ];
					?>
								
				<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" style="min-width: 100%;">

						
						<div class="card-section" data-equalizer-watch>
							<h3><?php the_title(); ?></h3>
						</div>
					</div>
				</a>
				
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
</div>
	<?php endif; ?>
	
	<?php get_template_part( 'template-parts/content', 'highlights' ); ?>

	<footer class="entry-footer">
		<?php gcc_wp_2018_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<?php
		get_footer();