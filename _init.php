<?php

register_domain('item', array(
	'handler' => 'TableStore',
	'table' => 'item',
	'hasMany' => array(
		'tags' => array(
			'table' => 'tag',
			'cascade' => true
		)
	),
    // allow unauthenticated POSTs
    'public' => true
));

register_domain('tag', array(
	'handler' => 'TableStore',
	'table' => 'tag'
));	
