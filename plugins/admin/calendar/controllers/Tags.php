<?php namespace Admin\Calendar\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Tags extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Admin.Calendar', 'main-menu-calendar', 'side-menu-calendar-tag');
    }

}
