<?php defined('SYSPATH') or die('No direct script access.');

class View_Facebook_Auth extends KOstache
{
	public function redirect_url()
	{
		return FacebooKO::factory()->getLoginUrl(
			array(
				'canvas' => 1,
				'fbconnect' => 0,
				'scope' => 'email',
				'redirect_uri' => Kohana::$config->load('facebook')->redirect_uri,
			)
		);
	}
}
