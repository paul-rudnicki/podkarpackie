<?php 
namespace App\Controllers;
/**
 * Init
 */
class Init
{
	function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'register_scripts'));
		add_theme_support('post-thumbnails', array('awards', 'jury'));
	}
	
	public function register_scripts()
	{
		wp_register_style(
			'podkarpackie', 
			get_template_directory_uri() . '/stylesheets/screen.css',
			array(), '1.0.0'
		);
		wp_enqueue_style( 'podkarpackie' );

		wp_register_script(
			'bootstrap-js',
			get_template_directory_uri() . '/js/bootstrap.min.js',
			array('jquery'),
			false, false
		);
		wp_enqueue_script('bootstrap-js');
		wp_register_script(
			'podkarpackie_scripts',
			get_template_directory_uri() . '/js/scripts.js',
			array('bootstrap-js'),
			false, false
		);
		wp_enqueue_script('podkarpackie_scripts');
	}
}