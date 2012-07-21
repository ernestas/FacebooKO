<?php defined('SYSPATH') or die('No direct script access.');

class Minion_Task_Facebook_Testuser_List extends Minion_Task
{
	public function execute(array $config)
	{   
		$app_id = Kohana::$config->load('facebook')->app_id;

		$test_users = FacebooKO::factory()
			->api('/'.$app_id.'/accounts/test-users', 'get');

		return print_r($test_users);
	}   
}
