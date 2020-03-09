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
<!-- 
<?php get_template_part( 'template-parts/content', 'slider' );  ?> -->

<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
    	
      <li class="is-active orbit-slide" style="background: url('https://gccstaging1.wpengine.com/wp-content/uploads/DE-student.png');">
        <figure class="orbit-figure">        
          		<figcaption class="orbit-caption">Space, the final frontier.</figcaption>
        </figure>
      </li>

      <li class="orbit-slide" style="background: url('https://gccstaging1.wpengine.com/wp-content/uploads/DE-student.png');">
        <figure class="orbit-figure">
          		<figcaption class="orbit-caption">Space, the final frontier.</figcaption>
      
      	</figure>
      </li>

      <li class="orbit-slide" style="background: url('https://gccstaging1.wpengine.com/wp-content/uploads/DE-student.png');">
        <figure class="orbit-figure">
          		<figcaption class="orbit-caption">Space, the final frontier.</figcaption>
      	</figure>
      </li>

      <li class="orbit-slide" style="background: url('https://gccstaging1.wpengine.com/wp-content/uploads/DE-student.png');">
        <figure class="orbit-figure">       
	          		<figcaption class="orbit-caption">Space, the final frontier.</figcaption>       
      	</figure>
      </li>

    </ul>

  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0">
      <span class="show-for-sr">First slide details.</span>
      <span class="show-for-sr" data-slide-active-label>Current Slide</span>
    </button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
</div>

<div class="home-content">

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
				
			 <div class="callout">
			
				<?php // ACF Image Object
							
					$image = get_field('story_image_home_thumb');
					// vars
					$url = $image['url'];
								
				?>

		 		<div class="stories-image" style=" background-image: url('<?php echo $url ?>');"></div> 
									
			<h3><a href="<?php the_field('video_url'); ?>"><?php the_title(); ?></a></h3>
			   
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
</div>
	<?php endif; ?>



<?php get_template_part( 'template-parts/content', 'highlights' ); ?>

</div>

<?php get_footer();