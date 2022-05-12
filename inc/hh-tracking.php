<?php

/**
 * Get GTM ID
 */

add_action( 'wp', 'get_gtm' );
function get_gtm() {
	global $gtm_id;
	$gtm_id = get_field( 'hh_tracking_gtm_id', 'option' );
}

/**
 * Return if empty
 */
global $gtm_id;
if ( ! $gtm_id ) {
	return;
}

/**
 * Define constants
 */
define( 'GTM_ID', 'GTM-' . $gtm_id );

add_action( 'wp_head', 'gtm_header', 20 );
function gtm_head() { ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer', '<?php echo esc_html( GTM_ID ); ?>');</script>
<!-- End Google Tag Manager -->
	<?php
}

add_action( 'wp_body_open', 'gtm_body', 20 );
function gtm_body() {
	?>
<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo esc_html( GTM_ID ); ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php
}
