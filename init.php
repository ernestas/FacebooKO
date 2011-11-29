<?php defined('SYSPATH') or die('No direct access allowed.');

include Kohana::find_file('vendor', 'facebook/src/facebook');

Route::set('facebook', 'facebook(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory'  => 'facebook',
		'controller' => 'realtime',
		'action'     => 'index',
	));
