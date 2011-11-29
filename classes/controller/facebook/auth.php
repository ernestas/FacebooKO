<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Facebook_Auth extends Controller
{
	public function before()
	{
		parent::before();

		if ( ! FacebooKO::factory()->getUser())
		{
			if ($this->request->is_ajax())
				throw new HTTP_Exception_401('User unauthenticated with facebook.');
			else
				$this->request->action('login');
		}
		else
		{
			// hacky fix for issue #387 in fb php sdk
			// sets cookies for ajax calls
			FacebooKO::factory()->getAccessToken();
		}
	}

	public function action_login()
	{
		$this->view = new View_Facebook_Auth('facebook/redirect');
	}
}
