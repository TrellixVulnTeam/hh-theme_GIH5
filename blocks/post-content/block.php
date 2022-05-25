<?php
if ( is_admin() ) :

	$image     = $block['example']['attributes']['data']['preview_image_help'];
	$image_url = get_stylesheet_directory_uri() . '/' . $image;
	?>

	<section class="hh-admin-section">
		<div>
			<img src="<?php echo esc_url( $image_url ); ?>" alt="" srcset="">
		</div>
	</section>
	<?php
else :
	$content = get_field( 'content' );
	if ( $content ) :
		?>
		<div class="main-content mt-14">
			<div class="container">
				<div class="relative w-full mx-auto desktop:w-9/12">
					<?php echo $content; // phpcs:ignore ?>
				</div>
			</div>
		</div>
		<?php
	endif;

endif;
