<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Facebook_Realtime_Core extends Kohana_Controller
{
	public function action_index()
	{
		// subscription verification
		if ($this->request->method() == 'GET' AND
			$_GET['hub_mode'] == 'subscribe' AND
			$_GET['hub_verify_token'] ==
				Kohana::$config->load('facebook.realtime.verify_token'))
		{
			echo $_GET['hub_challenge'];
		}
		// data change ping
		elseif ($this->request->method() == 'POST')
		{
			// get post data
			$updates = json_decode(file_get_contents("php://input"), true);

			$this->process($updates);
		}
	}


	/**
	 * Process facebook's real-time update ping
	 *
	 * [!!] Note the request must complete within 15 seconds.
	 * Otherwise Facebook server will consider it a timeout and 
	 * resend the push notification again.
	 *
	 * @link    http://developers.facebook.com/docs/reference/api/realtime/
	 *
	 * @param   array  $updates
	 * @return  void
	 */
	abstract protected function process($updates);
}
