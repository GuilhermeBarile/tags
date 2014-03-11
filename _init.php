<?php

register_domain('item', array(
	'handler' => 'TableStore',
	'table' => 'item',
    // allow unauthenticated POSTs
    'public' => true,
    // to decode the tags array
    'mapper' => 'item_mapper'
));


function item_mapper($item) {

    if(empty($item['tags'])) {
        $item['tags'] = array();
    }
    else {
        $item['tags'] = json_decode($item['tags']);
    }

    return $item;
}
