<?php

/**
 * 404
 */

get_header(); ?>

<div class="flex items-center justify-center w-screen h-screen bg-gradient-to-r from-indigo-600 to-blue-400 ">
	<div class="px-40 py-20 bg-white rounded-md shadow-xl">
		<div class="flex flex-col items-center justify-between gap-4">
			<h1 class="text-blue-600 font-primary-600 text-9xl">404</h1>
			<p class="text-center text-gray-500 font-primary-500 md:text-lg">La page que vous cherchez est introuvable.</p>
			<a href="<?php echo esc_url( site_url() ); ?>" class="px-6 py-2 text-sm text-blue-800 bg-blue-100 font-primary-400">Retour</a>
		</div>
	</div>
</div>

<?php
get_footer();
