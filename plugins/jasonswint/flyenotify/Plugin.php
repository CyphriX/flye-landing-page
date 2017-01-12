<?php namespace JasonSwint\FlyeNotify;

use Backend;
use System\Classes\PluginBase;

/**
 * FlyeNotify Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'FlyeNotify',
            'description' => 'No description provided yet...',
            'author'      => 'JasonSwint',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'JasonSwint\FlyeNotify\Components\SignUp' => 'signUp',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'jasonswint.flyenotify.some_permission' => [
                'tab' => 'FlyeNotify',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'flyenotify' => [
                'label'       => 'FlyeNotify',
                'url'         => Backend::url('jasonswint/flyenotify/signups'),
                'icon'        => 'icon-leaf',
                'permissions' => ['jasonswint.flyenotify.*'],
                'order'       => 500,
            ],
        ];
    }
}
