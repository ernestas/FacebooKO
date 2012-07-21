<?php defined('SYSPATH') or die('No direct script access.');

class Minion_Task_Facebook_Realtime_Subscriptions extends Minion_Task
{
	public function execute(array $config)
	{
		$app_id = Kohana::$config->load('facebook.app_id');

		// query the subscriptions
		$subscriptions = FacebooKO::factory()
			->api('/'.$app_id.'/subscriptions', 'get');

		return print_r($subscriptions);
	}
}
