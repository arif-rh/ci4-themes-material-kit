<?php namespace App\Controllers;

use Arifrh\Themes\Themes;

class Material extends BaseController
{
	protected $helpers = ['themes'];

	public function index()
	{
		$js = "$(document).ready(function() {
			//init DateTimePickers
			materialKit.initFormExtendedDatetimepickers();
	  
			// Sliders Init
			materialKit.initSliders();
		  });";

		Themes::init()
			->addExternalCSS(theme_url('assets/demo/demo.css'))
			->addInlineJS($js);

		Themes::render('material/demo');
	}

	public function documentation()
	{
		Themes::init()->addExternalCSS(theme_url('assets/demo/demo.css'));

		Themes::render('material/documentation');
	}

	public function landing()
	{
		Themes::init()->addExternalCSS(theme_url('assets/demo/demo.css'));

		Themes::render('material/landing-page');
	}

	public function profile()
	{
		Themes::init()->addExternalCSS(theme_url('assets/demo/demo.css'));

		Themes::render('material/profile', [
			'body_class' => 'profile-page'
		]);
	}

	public function login()
	{
		Themes::init()->addExternalCSS(theme_url('assets/demo/demo.css'));

		Themes::render('material/login', [
			'body_class' => 'login-page'
		]);
	}
}
