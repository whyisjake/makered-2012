<?php
	/**
 	  * @package Mentor.Makerspace.com
 	  * @subpackage Mentor.Makerspace.com
 	 **/
?>
<?php
	
	/********** All all widget registrations here **********/
	/*****
     * Description: Register widgetized areas and update sidebar with default widgets
     * Since: 1.0
     * Author: Cole Geissinger
    /*****/
    function mms_widgets_init() {
        if(function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => 'Sidebar',
                'id'   => 'sidebar',
                'description'   => 'Place widgets for the sidebar.',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));

            register_sidebar(array(
                'name' => 'Home Page Blue Bar',
                'id'   => 'home-bluebar',
                'description'   => 'Place widgets for the home page big blue bar',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>'
            ));

            register_sidebar(array(
                'name' => __('Home Page Footer 1', 'mentor_makerspace'),
                'id' => 'home-footer-1',
                'description' => 'Place widgets for left column in the footer',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));

            register_sidebar(array(
                'name' => __('Home Page Footer 2', 'mentor_makerspace'),
                'id' => 'home-footer-2',
                'description' => 'Place widgets for center column in the footer',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));

            register_sidebar(array(
                'name' => __('Home Page Footer 3', 'mentor_makerspace'),
                'id' => 'home-footer-3',
                'description' => 'Place widgets for right column in the footer',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
            ));
        }
    }
    add_action('widgets_init', 'mms_widgets_init');
?>