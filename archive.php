<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */
get_header();?>

    <?php
		if ( have_posts() ) : ?>

   
<header>

    <div class="row expanded hero-section-text">

      <div class="row header-content">
     
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  
        <div class="crumbs-container">

            <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
              <?php custom_breadcrumbs();?>
            </nav>
    
        </div>
 
    </div>

  </div>
    
</header>

    <div class="row expanded content-area gutter-small" >
    
    <div class="row">

      <?php get_sidebar();?>

      <div class="columns small-12 medium-12 large-8" style="padding: 0">
      
        <div class="entry-content" id="main">

                <?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */

								?>



                          <div class="row expaned latest-post">

                            <a href="<?php the_permalink(); ?>"><?php the_title('<h2 class="screen-reader-text">', '</h2>') ?></a>

                            <h3 class="post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <?php if ( 'post' === get_post_type() ) : ?>
                            
                            <div class="entry-meta">
                                <p>
                                    <strong>
							<?php
	        		gcc_wp_2018_posted_on();
						?>
						<?php if (is_tag()) {
						# code...
						_e('| Posted in:', 'gcc-wp-2018'); echo single_tag_title(); ?>
					</strong></p>
                                <?php } ?>
                                </strong>
                                </p>
                            </div>
                            <!-- .entry-meta -->
                            <?php endif; ?>
                            <p>
                                <?php the_excerpt(

				sprintf(
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

			); ?>
                            </p>
                        </div>
                    </div>
                </div>

                    <?php endwhile;

			the_posts_navigation(); ?>

            </div>

            <?php else :

			get_template_part( 'template-parts/content', 'none' ); ?>


		<?php endif; ?>

            </div>


        <?php
get_footer();
