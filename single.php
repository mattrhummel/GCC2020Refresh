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
  <header>

    <div class="row expanded header-section">

      <div class="row header-container">

        <div class="header-content">

       <div class="columns small-10 medium-10">

        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  
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