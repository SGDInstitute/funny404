<?php namespace SGDInstitute\Funny404;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'SGDInstitute\Funny404\Components\Funny404' => 'funny404',
        ];
    }

    public function registerSettings()
    {
    }
}
