<?php

$rows    = get_field( 'media_&_text' );
$content = $rows[0];

get_header(
	'about',
	array(
		'content' => $content,
	)
);

$content = $rows[1];
get_template_part(
	'template-parts/sections/media-text',
	null,
	array(
		'content'     => $content,
		'orientation' => 'image-text--image-left',
	)
);

get_template_part( 'template-parts/sections/location-icons' );

$content = $rows[2];
get_template_part(
	'template-parts/sections/media-text',
	null,
	array(
		'content'     => $content,
		'orientation' => 'image-text--image-right',
	)
);

get_template_part( 'template-parts/sections/contact-global' );

get_footer();
