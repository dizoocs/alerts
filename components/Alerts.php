<?php
namespace Dizoo\Alerts\components;

use Cms\Classes\ComponentBase;
use Dizoo\Alerts\Models\Messages;
use Carbon\Carbon;

class Alerts extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Alerts',
            'description' => 'Displays alerts on the page.'
        ];
    }

    public function onRun()
    {
        $alerts = $this->getMessages();
        if($alerts->count()) {
            $this->page['alerts'] = $alerts;
            if($this->property('bootstrapCss')) {
                $this->addCss('/plugins/dizoo/alerts/assets/css/bootstrap.min.css');
            }
            if($this->property('bootstrapJa')) {
                $this->addJs('/plugins/dizoo/alerts/assets/js/bootstrap.min.css');
            }
        } else {
            $this->page['alerts'] = false;
        }

    }

    public function getMessages()
    {
        return Messages::where('status', true)->whereDate('enddate', '>=', Carbon::today()->toDateString())->orderBy('sort_order', 'ASC')->get();
    }
    
    public function defineProperties()
    {
        return [
            'bootstrapCss' => [
                'title'             => 'Include Bootstrap CSS',
                'description'       => 'If your theme already uses bootstrap CSS uncheck this box',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'bootstrapJs' => [
                'title'             => 'Include Bootstrap JS',
                'description'       => 'If your theme already uses bootstrap JS uncheck this box',
                'default'           => true,
                'type'              => 'checkbox'
            ],
        ];
    }
}