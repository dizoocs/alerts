<?php namespace Dizoo\Alerts;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \Dizoo\Alerts\Components\Alerts::class       => 'alerts'
        ];
    }

    public function registerSettings()
    {
    }
}
