<?php namespace App\Config;

class Themes extends \Arifrh\Themes\Config\Themes
{
    /**
	 * Default Theme name
	 *
	 * This can be overide on run-time
	 */
	public $theme = 'material-kit';

    /**
	 * Theme Path - Respect to FCPATH
	 */
	public $theme_path = 'themes';

	/**
	 * CSS path inside theme path
	 */
	public $css_path = 'assets/css';

	/**
	 * JS path inside theme path
	 */
	public $js_path = 'assets/js';

	/**
	 * Image path inside theme path
	 */
    public $image_path = 'assets/img';
    
	/**
	 * Header template name
	 */
	public $header = 'material-header';

	/**
	 * Main template name
	 */
	public $template = 'material-template';

	/**
	 * Footer template name
	 */
	public $footer = 'material-footer';

	/**
	 * Wether use only one full template (skip header & footer template)
	 */
	public $use_full_template = FALSE;

	/**
	 * Plugins path inside theme path
	 */
	public $plugin_path = 'plugins';

	/**
	 * Registered Plugins
	 * Format: 
	 * [ 
	 * 	 'plugin_key_name' => [
	 * 		'js'  => [...js_array]
	 * 		'css'  => [...css_array]
	 *   ]
	 * ]
	 * 
	 */
	public $plugins = [];

}