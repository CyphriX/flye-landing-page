<?php namespace JasonSwint\FlyeNotify\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Sign Ups Back-end Controller
 */
class SignUps extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('JasonSwint.FlyeNotify', 'flyenotify', 'signups');
    }
}
