<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller_Rest
 */
class Controller_Welcome extends Controller_Rest
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function get_index()
	{
		//return Response::forge(View::forge('welcome/index'));

		return "Welcome to Portfolio API v0.10.0-alpha";
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function get_hello($greeting)
	{
		try {
			return $this->response("Welcome $greeting, to Portfolio API v0.10.0-alpha");
		} catch (Exception $e) {
			return $this->response("= [", 404);
		}        
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function get_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
