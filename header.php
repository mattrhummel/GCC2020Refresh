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
    <!--monsido refresh dev code-->
    <script type="text/javascript">
    window._monsido = window._monsido || {
        token: "kkPDlJbPWVu3n1IozYf93Q",
    };
</script>
<script type="text/javascript" async src="https://app-script.monsido.com/v2/monsido-script.js"></script>


  </head>
  
  <body <?php body_class(); ?>>
    <div id="skip">
      
      <a href="#main-content" class="show-on-focus"><?php _e('skip to content', 'gcc-wp-2018') ?></a>

    </div>

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

    <?php
    get_template_part( 'template-parts/content', 'weather-alert' );
    ?> 

<main id="main-content">