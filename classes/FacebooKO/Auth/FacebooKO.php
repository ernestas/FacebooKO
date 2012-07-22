<?php

class FacebooKO_Auth_FacebooKO extends Auth {

	public function get_user($default = NULL)
	{
		return FacebooKO::factory()->getUser() ?: $default;
	}

	protected function _login($username, $password, $remember)
	{

	}

	public function password($username)
	{

	}

	public function check_password($password)
	{

	}

}
