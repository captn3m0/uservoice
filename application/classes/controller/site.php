<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This is the Controller which we will extend across
 * All our pages requiring this template
 * Copied from http://kerkness.ca/wiki/doku.php?id=template-site:extending_the_template_controller
 * Read more over there
 * Since this is called each time, we can do lots of stuff over here!
 */

class Controller_Site extends Controller_Template 
{

  public $template = 'site';

  /**
   * The before() method is called before your controller action.
   * In our template controller we override this method so that we can
   * set up default values. These variables are then available to our
   * controllers if they need to be modified.
   */
  public function before()
  {
	  parent::before();
		if ($this->auto_render)
		{
			// Initialize empty values
			$this->template->title   = '';
			$this->template->content = '';
			$this->template->styles = array();
			$this->template->scripts = array();		
		  }
	 $this->template->logged_in_user='abhayumt';
  }

  /**
   * The after() method is called after your controller action.
   * In our template controller we override this method so that we can
   * make any last minute modifications to the template before anything
   * is rendered.
   */
  public function after()
  {
	if ($this->auto_render)
	{
		$styles = array(
			'media/css/initial.css' => 'screen, projection, print',
			'media/css/style.css' => 'screen',
		);
		$scripts = array(
			'media/js/jquery.js',
		);
		
		$this->template->styles = array_merge( $this->template->styles, $styles );
		$this->template->scripts = array_merge( $this->template->scripts, $scripts );
	}
	parent::after();
	  }
}
