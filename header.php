<?php
/**
* The header for our theme
*
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gccwp-2018
*/
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    
    <!-- Google Tag Manager -->
    <!--     <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T2KLMW');</script> -->
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <!--  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2KLMW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    
    <script type="text/javascript">
    var _monsido = _monsido || [];
    _monsido.push(['_setDomainToken', '14l5XpM9a7fdx1hVoA-QRQ']);
    _monsido.push(['_withStatistics', 'true']);
    </script>
    
    <script async src="//cdn.monsido.com/tool/javascripts/monsido.js">
    </script>
  </head>
  
  <body <?php body_class(); ?>>
    <div id="skip">
      
      <a href="#main-content" class="show-on-focus"><?php _e('skip to content', 'gcc-wp-2018') ?></a>

    </div>
<!--     <?php
    //get_template_part( 'template-parts/content', 'weather-alert' );
    ?> -->    

<div class="off-canvas position-right" id="offCanvasRightPush" data-off-canvas>

<div class="row">
             <!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
      <span aria-hidden="true" class="times">&times;</span>
    </button>

               <div class="mygcc-button">
                <a href="<?php echo esc_html_e('https://gcc.my.vccs.edu/', 'gcc-wp-2018'); ?>" class="button primary expanded">
                  
                  <i class="fa fa-lock" aria-hidden="true"></i>
                  <?php _e('myGCC', 'gcc-wp-2018'); ?>
                </a>
                
              </div>
              
              <div id="gccSearch" class="search-container">
                
                <?php
                  get_template_part( 'searchform' );
                ?>

              </div>
          
                <?php  //function located in inc/main-navigation.php
                 gcc_wp_2018_main_menu(); ?>
  
          <div class="secondary-menu-container">
            <div class="row secondary-menu">
   
              <div class="small-12 medium-6 columns secondary-menu">
                <h2 id="menu_information"><?php _e('Information For', 'gcc-wp-2018') ?></h2>
                
                <?php //function located in inc/main-navigation.php
                  gcc_wp_2018_information_menu(); ?>

              </div>

              <div class="small-12 medium-6 columns secondary-menu">
                <h2 id="menu_resource"><?php _e('Resources', 'gcc-wp-2018'); ?></h2>
                  
                  <?php  //function located in inc/main-navigation.php
                  gcc_wp_2018_resource_menu(); ?>

              </div>
            </div>
        </div>

    </div>
</div>
<div class="off-canvas-content" data-off-canvas-content>

<header class="branding">
  
            <div class="row">

              <div class="columns small-12">

              <div class="top-bar hide-for-print">
                
                <div class="top-bar-left">
                  <?php the_custom_logo( ); ?>
                </div>

                <div class="top-bar-right">
                  <nav role="navigation" class="main-nav">
                    <div class="menu germanna-nav">

                      <?php gcc_wp_2018_top_bar_menu() ?>  

                      <ul class="menu">
                  
                        <li class="menu-item has-menu">
                          <button type="button" class="button" data-toggle="offCanvasRightPush"><?php _e(' Menu', 'gcc-wp-2018'); ?>
                          </button>
                        </li>

                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
            </div>
</header>

<main id="main-content">