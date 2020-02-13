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

    <div class="row expanded header-section">

      <div class="row header-container">

        <div class="header-content">

       <div class="columns small-10 medium-10">

      
        <h1 class="entry-title"><?php echo get_cat_name(1); ?></h1>

  
        <div class="crumbs-container">    
        </div>

    </div>

    </div>

  </div>

  </div>
    
</header>

  <div class="row expanded content-area gutter-small" >
    
    <div class="row">

<div class="mobile-sidebar" data-responsive-toggle="example-menu" data-hide-for="large">
   <button class="button expanded mobile-sidebar-button" type="button" data-toggle="example-menu"><?php _e('In this section', 'gcc-wp-2018'); ?></button>

   
</div>

     <aside class="column large-4 nav-panel hide-for-print mobile-sidebar" id="example-menu">

        <?php dynamic_sidebar( 'single-widgets' ); ?>

    </aside>

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

                          <div class="callout primary">

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
               
                        </div>

                    <?php endwhile;

			the_posts_navigation(); ?>

            </div>

            <?php else :

			get_template_part( 'template-parts/content', 'none' ); ?>


		<?php endif; ?>

                            </div>
</div>


            </div>



        <?php
get_footer();
