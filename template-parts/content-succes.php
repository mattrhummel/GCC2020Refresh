 <?php if( get_field('success_section_heading') ): ?>
	
	<div id="success" class="row expanded gutter-small expanded">
		
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
	      
	            $image = get_field('story_image_home_thumb');
	          // vars
	          $url = $image['url'];
	        
	      ?>

				<div class="stories-image" style="background-image: url('<?php echo $url ?>');"></div> 
								
						
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
	<?php endif; ?>