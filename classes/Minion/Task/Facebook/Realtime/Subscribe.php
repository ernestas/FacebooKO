<?php defined('SYSPATH') or die('No direct script access.');

class Minion_Task_Facebook_Realtime_Subscribe extends Minion_Task
{
	public function execute(array $config)
	{
		// load the config
		$facebook = Kohana::$config->load('facebook');

		// definition of the object to subscribe to
		$subscribe_to = array(
			'object'       => 'user',
			'callback_url' => $facebook['realtime']['callback_url'],
			'fields'       => $facebook['realtime']['fields'],
			'verify_token' => $facebook['realtime']['verify_token']);

		// subscribe
		FacebooKO::factory()
			->api('/'.$facebook['app_id'].'/subscriptions', 'post', $subscribe_to);

		// print out the subscriptions
		$subscriptions = new Minion_Task_Facebook_Realtime_Subscriptions;
		return "\nOutput of: ./minion facebook:realtime:subscriptions\n\n"
			.$subscriptions->execute(array());
	}
}
