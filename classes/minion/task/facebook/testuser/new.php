<?php defined('SYSPATH') or die('No direct script access.');

class Minion_Task_Facebook_Testuser_New extends Minion_Task
{
	public function execute(array $config)
	{   
		$app_id = Kohana::$config->load('facebook')->app_id;

		$test_user_data = array(
			'installed' => false,
			//'name'      => 'John Doe',
			'permissions' => 'email',
		);  

		$new_test_user = FacebooKO::factory()
			->api('/'.$app_id.'/accounts/test-users', 'post', $test_user_data);

		return print_r($new_test_user);
	}   
}
