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
        return new FacebooKO(
            array(
                'appId'  => Kohana::$config->load('facebook')->app_id,
                'secret' => Kohana::$config->load('facebook')->secret,
                'cookie' => true, // enable optional cookie support
            )
        );
    }
}
