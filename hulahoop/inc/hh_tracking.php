<?php

// Google Tag Manager ID
$GTM_ID = get_field('hh_tracking_gtm_id', 'option');

// If empty return
if (!$GTM_ID) {
	return;
}

define('GTM_ID', 'GTM-' . $GTM_ID);

add_action('wp_head', 'GTM_head', 20);
function GTM_head() {
?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer', '<?php echo GTM_ID; ?>');</script>
<!-- End Google Tag Manager -->
<?php
}

add_action('wp_body_open', 'GTM_body', 20);
function GTM_body() { ?>
<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo GTM_ID; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<?php }
