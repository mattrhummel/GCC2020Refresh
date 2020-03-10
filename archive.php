<?php
/**
* The template for displaying archive pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header();?>

<header>
  <div class="row expanded header-section">
    <div class="row header-container">
      <div class="header-content">
        <div class="columns small-10 medium-10">
          
          <h1 class="entry-title"><?php echo get_the_archive_title(); ?></h1>
          <div class="crumbs-container">
          </div>
        </div>
      </div>
    </div>
  </div>
  
</header>
<?php
if ( have_posts() ) : ?>

<div class="row expanded content-area gutter-small" >
  
  <div class="row">
    <div class="mobile-sidebar" data-responsive-toggle="example-menu" data-hide-for="large">
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="example-menu"><?php _e('In this section', 'gcc-wp-2018'); ?></button>
      
    </div>

    <aside class="columns large-4 nav-panel hide-for-print mobile-sidebar" id="example-menu">
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
          <?php the_date(); ?>
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
    <?php else : ?>


 <div class="row content-area">

  <div class="columns small-12">
      
  <div class="entry-content" id="main">

    <h2 class="page-title"><?php esc_html_e( 'Nothing found for this event category', 'gcc-wp-2018' ); ?></h2>


    <?php
    if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

      <p><?php
        printf(
          wp_kses(
            /* translators: 1: link to WP admin new post page. */
            __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'gcc-wp-2018' ),
            array(
              'a' => array(
                'href' => array(),
              ),
            )
          ),
          esc_url( admin_url( 'post-new.php' ) )
        );
      ?></p>

    <?php elseif ( is_search() ) : ?>

      <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gcc-wp-2018' ); ?></p>
      <?php
        get_search_form();

    else : ?>

      <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'gcc-wp-2018' ); ?></p>
      <?php


    endif; ?>

  </div>
  </div>

</div>


    <?php endif; ?>
  </div>
</div>
</div>
<?php
get_footer();