<?php defined('SYSPATH') or die('No direct script access.');

class FacebooKO_Base extends Facebook
{
    /**
     * The factory method returns a Facebook instance. Usefull for chaining.
     *
     * @return  Facebook
     */
    public static function factory()
    {
		$facebook = Kohana::$config->load('facebook');

        return new FacebooKO(
            array(
                'appId'      => $facebook->app_id,
                'secret'     => $facebook->secret,
                'fileUpload' => $facebook->file_upload,
            )
        );
    }
}
