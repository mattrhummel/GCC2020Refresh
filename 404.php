<?php
/**
* The template for displaying 404 pages (Not Found)
*
* @package WordPress
*/
get_header(); ?>

	<?php
	$error_page_heading = get_field('error_page_heading', 'option');
	$error_page_error_message_1 = get_field('error_page_error_message_1', 'option');
	$error_page_error_message_2 = get_field('error_page_error_message_2', 'option');
	$error_page_button_text = get_field('error_page_button_text', 'option');
	$error_page_button_url = get_field('error_page_button_url', 'option');
		
	?>

  <header>

    <div class="row expanded hero-section-text">

      <div class="row header-content">
     
       <h1 class="entry-title"><?php echo $error_page_heading; ?></h1>
  
        <div class="crumbs-container">

  
            <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
              <?php custom_breadcrumbs();?>
            </nav>
    
        </div>

    </div>

  </div>
    
</header>


	<div class="row expanded content-area">
	  <div class="row">
	  	<aside class="column large-4 nav-panel hide-for-print mobile-sidebar" id="example-menu">

	<?php dynamic_sidebar( 'admissions-widgets' ); ?>

</aside>
      <div class="columns small-12 medium-12 large-8">
      
        <div class="entry-content" id="main">
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
			<p><?php  echo $error_page_error_message_1;  ?></p>
			<p><?php echo $error_page_error_message_2;  ?></p>
			<p><a href="<?php echo $error_page_button_url; ?>" class="button primary"><?php echo $error_page_button_text; ?></a>
		</p>
                <form role="search" method="get" id="searchform" action="<?php echo get_home_url(); ?>/search_gcse/">
                  <div class="input-group">
                    <input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
                    <input type="hidden" name="ie" value="utf8" title="hidden" />
                    <input type="hidden" name="oe" value="utf8" title="hidden" />
                    <input type=hidden name=domains value="<?php echo get_home_url();     //get the domain base for the search submit?>" title="home" />
                    <input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home"  />
                    
                    <input type="text" name="q" id="search-field" class="input-group-field">
                    
                    <div class="input-group-button">
                      <input id="searchsubmit-mobile" type="submit" class="button" value="Search" aria-label="<?php _e('Search', 'gcc-wp-2018')?>">
                    </div>
                  </div>
                </form>
	</div>
</div>
</div>
</div>

<?php
endif;
get_footer();