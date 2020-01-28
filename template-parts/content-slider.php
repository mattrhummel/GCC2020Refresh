<?php if ( have_rows( 'slide_item', 'options' ) ) : ?>
<div class="slider-wrap">
	
<div id="sync1" class="owl-carousel owl-theme" style="z-index: 0;">

	<?php
	//while there are slide items
	while ( have_rows( 'slide_item', 'options' ) ) : the_row(); ?>
	<?php // ACF Image Object
	
	$image = get_sub_field('slide_image');
	// vars
	$url = $image['url'];
	
	?>
	<div class="item">
		<div class="row column expanded no-gutter hero" style="background-image: url('<?php echo $url ?>');">
			<div class="row">
				<div class="hero-content">
					
					<div class="hero-caption">
						<h1><?php the_sub_field( 'slide_heading' ); ?></h1>
						<p class="lead"><?php the_sub_field( 'slide_text' ); ?></p>
						
						<p>
							<a href="<?php the_sub_field( 'slide_button_url' ); ?>" class="button"><?php the_sub_field( 'slide_button_text' ); ?></a>
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>

</div>
</div>
<?php endif; ?>