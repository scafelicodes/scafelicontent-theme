<?php
/*
	
@package scafelitheme
	
	========================
		ADMIN PAGE
	========================
*/
function scafeli_add_admin_page() {
	
	//Generate scafeli Admin Page
	add_menu_page( 'scafeli Theme Options', 'scafeli', 'manage_options', 'scafeli_content', 'scafeli_theme_create_page', get_template_directory_uri() . '/img/scafeli-icon.png', 110 );
	
	//Generate scafeli Admin Sub Pages
	add_submenu_page( 'scafeli_content', 'scafeli Theme Options', 'General', 'manage_options', 'scafeli_content', 'scafeli_theme_create_page' );
	add_submenu_page( 'scafeli_content', 'scafeli CSS Options', 'Custom CSS', 'manage_options', 'scafeli_content_css', 'scafeli_theme_settings_page');
	
	//Active Custom Settings
	add_action('admin_init', 'scafeli_custom_settings');
	
}

add_action( 'admin_menu', 'scafeli_add_admin_page' );

function scafeli_custom_settings() {
	register_setting( 'scafeli-settings-group', 'first_name' );
	add_settings_section( 'scafeli-sidebar-options', 'Sidebar Option', 'scafeli_sidebar_options', 'scafeli_content');
	add_settings_field( 'sidebar-name', 'First Name', 'scafeli_sidebar_name', 'scafeli_content', 'scafeli-sidebar-options');
}


function scafeli_sidebar_options() {
	echo 'Customize your Sidebar Information';
}
function scafeli_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name' ) );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" />';
}
function scafeli_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/scafeli-admin.php' );
}
function scafeli_theme_settings_page() {
	
	echo '<h1>Scafeli Custom CSS</h1>';
	
}