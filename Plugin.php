<?php namespace GrofGraf\ContactMe;

use Backend;
use System\Classes\PluginBase;

/**
 * ContactMe Plugin Information File
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
            'name'        => 'ContactMe',
            'description' => 'No description provided yet...',
            'author'      => 'GrofGraf',
            'icon'        => 'icon-envelope'
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
            'GrofGraf\ContactMe\Components\contactForm' => 'contactForm',
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
            'grofgraf.contactme.some_permission' => [
                'tab' => 'ContactMe',
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
        return []; // Remove this line to activate

        return [
            'contactme' => [
                'label'       => 'ContactMe',
                'url'         => Backend::url('grofgraf/contactme/mycontroller'),
                'icon'        => 'icon-envelope',
                'permissions' => ['grofgraf.contactme.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerSettings(){
      return [
          'settings' => [
              'label'       => 'Contact Form',
              'description' => 'Settings for contact form',
              'category'    => 'Marketing',
              'icon'        => 'icon-envelope',
              'class'       => 'GrofGraf\ContactMe\Models\Settings',
              'order'       => 100
          ]
      ];
    }

    public function registerMailTemplates()
    {
        return [
            'grofgraf.contactme::emails.message' => 'Mail template for contact from website',
        ];
    }
}
