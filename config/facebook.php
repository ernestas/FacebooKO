<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'app_id'       => '',
	'secret'       => '',
	'file_upload'  => FALSE,
	'redirect_uri' => 'http://apps.facebook.com/', // app canvas url
	'realtime'     => array(
		'verify_token' => '', // random token
		'fields'       => 'name,first_name,last_name,email,timezone,locale,friends',
		'callback_url' => 'http://***/facebook/realtime/', // where realtime pings
	),
);
