<?php namespace Dizoo\Alerts\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Messages extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'manage-alerts' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dizoo.Alerts', 'main-menu-item');
    }
}
