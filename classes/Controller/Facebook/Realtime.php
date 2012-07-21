<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Facebook_Realtime extends Controller_Facebook_Realtime_Core
{
	protected function process($updates)
	{
		Kohana::$log->add(Log::INFO, 'Implement process() method in Controller_Facebook_Realtime in your application');
	}
}
