<?php
if ( $modx->event->name == 'OnDocFormSave' ) {
	$page_title = $resource->get( 'pagetitle' ); // Title of the resource
	$page_id = $resource->get( 'id' ); // ID of the resource
	$page_desc = $resource->get( 'description' ); // The description field of the resource
	$page_content = $resource->get( 'content' ); // The content body of the resource
	$page_image = $resource->getTVValue( 'page_image' ); // The page image Template Variable
	$page_amp = $resource->getTVValue( 'amp_template' ); // The AMP Template
	$page_featured = $resource->getTVValue( 'featured' ); // The featured template variable
	$page_uri = $resource->get( 'uri' ); // The URI of the resource

	if ( $mode == 'new' ) {
		// resource created
		return 'New ID: ' . $page_id . 'New Description: ' . $page_desc;
	} else {
		// existing resource was updated
		return 
			'New ID: ' . $page_id .
			'
			'.
			'Page Title: ' . $page_title .
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