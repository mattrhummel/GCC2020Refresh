<?php
/**
* The template for displaying 404 pages (Not Found)
*
* @package WordPress
*/
get_header(); ?>

<header>

    <div class="row expanded header-section">

      <div class="row header-container">

        <div class="header-content">
          <div class="columns small-12 medium-8">
     
       <h1 class="entry-title"><?php the_field( 'error_page_heading', 'options' ); ?></h1>
        
        <div class="crumbs-container">

        </div>

      </div>

    </div>

  </div>

  </div>
    
</header>

	<div class="row expanded content-area">
	  <div class="row">
	
      <div class="columns small-12 medium-10">
      
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
			<p><?php  the_field( 'error_page_error_message_1', 'options' );  ?></p>
			<p><?php the_field( 'error_page_error_message_2', 'options' ); ?></p>
			<p><a href="<?php the_field( 'error_page_button_url', 'options' ); ?>" class="button primary"><?php the_field( 'error_page_button_text', 'options' ); ?></a>
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