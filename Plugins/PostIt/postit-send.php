<?php
if ( $modx->event->name == 'OnDocFormSave' ) {
	$page_id = $resource->get( 'id' );
	$page_desc = $resource->get( 'description' );
	$page_content = $resource->get( 'content' );
	$page_image = $resource->getTVValue( 'page_image' );
	$page_amp = $resource->getTVValue( 'amp_template' );
	$page_featured = $resource->getTVValue( 'featured' );
	$page_uri = $resource->get( 'uri' );

	if ( $mode == 'new' ) {
		// resource created
		return 'New ID: ' . $page_id . 'New Description: ' . $page_desc;
	} else {
		// existing resource was updated
		return 
			'New ID: ' . $page_id .
			'
			'.
		 	' New Description: ' . $page_desc .
			'
			'.
		 	' Page Image: ' . $page_image .
			'
			'.
		 	' Page AMP: ' . $page_amp .
			'
			'.
		 	' Page Featured: ' . $page_featured .
			'
			'.
		 	' Page URI: ' . $page_uri .
			'
			'.
		 	$page_content;
	}
}