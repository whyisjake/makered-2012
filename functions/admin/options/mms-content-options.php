<?php
	$content = $shortname . '-content-options';
	
	$mms_options = array(
		//General Settings section
		array(
			'title' => 'Content Options',
			'type' => 'header',
			'page' => $content
		),
		/** Header Section **/
		array(
			'title' => 'Header',
			'id' => 'header',
			'class' => 'site-header',
			'type' => 'open',
			'page' => $content
		),
		array(
			'type' => 'section open',
			'page' => $content
		),
		array(
			'title' => 'Header Call To Action Text',
			'description' => 'Set the content you want for the call to action below the slider.',
			'id' => $shortname . '-header-cta-text',
			'class' => 'text',
			'name' => $shortname . '-header-cta-text',
			'type' => 'text',
			'page' => $content
		),
		array(
			'title' => 'Header Button Text',
			'description' => 'Set the text you want for the call to action button below the slider.',
			'id' => $shortname . '-header-cta-btn-text',
			'class' => 'text',
			'name' => $shortname . '-header-cta-btn-text',
			'type' => 'text',
			'page' => $content
		),
		array(
			'title' => 'Header Button Link',
			'description' => 'Set the link you want for the call to action button below the slider.',
			'id' => $shortname . '-header-cta-btn-link',
			'class' => 'text',
			'name' => $shortname . '-header-cta-btn-link',
			'type' => 'text',
			'page' => $content
		),
		array(
			'type' => 'section close',
			'page' => $content
		),
		array(
			'type' => 'close',
			'page' => $content
		),
		
		
		/*** SEO Options ***/
		array(
			'title' => 'SEO / Social Media Links',
			'id' => 'seo-smo-options',
			'class' => 'seo-smo-options',
			'type' => 'open',
			'page' => $content
		),
		array(
			'type' => 'section open',
			'page' => $content
		),
		array(
			'title' => 'Google Analytics',
			'description' => 'Enter the Google Analytics account number in here.',
			'id' => $shortname . '-analytics-code',
			'name' => $shortname . '-analytics-code',
			'type' => 'text',
			'page' => $content
		),
		array(
			'type' => 'section close',
			'page' => $content
		),
		array(
			'type' => 'close',
			'page' => $content
		)
	);
?>