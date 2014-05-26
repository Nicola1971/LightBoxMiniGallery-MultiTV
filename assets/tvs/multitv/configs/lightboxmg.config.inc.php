<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
	'image' => array(
		'caption' => 'Image',
		'type' => 'image'
	),
	'thumb' => array(
		'caption' => 'Thumbnail',
		'type' => 'thumb',
		'thumbof' => 'image'
	),
	'caption' => array(
		'caption' => 'Title',
		'type' => 'text'
	),

);
$settings['templates'] = array(
	'outerTpl' => '<div class="mgallery">[+wrapper+]</div>',
	'rowTpl' => '<div class="mgalleryimage"><a data-lightbox="gallery" data-title="[+title+]" href="[+image+]"><img src="[!phpthumb? &input=`[+image+]` &options=`w=200,h=140,zc=TL`!]" alt="[+caption+]" title="[+caption+]" /></a></div>'
		)
?>