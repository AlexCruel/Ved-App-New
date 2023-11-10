<?php namespace Admin\Telegram;

use Admin\Telegram\Models\Settings;
use Backend;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Telegram notifications',
            'description' => 'Telegram plugin for notifications',
            'author' => 'Alex Karpenkov',
            'icon' => 'icon-paper-plane-o',
            'homepage' => 'https://github.com/AlexCruel'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Admin\Telegram\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'admin.telegram.some_permission' => [
                'tab' => 'telegram',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'telegram' => [
                'label' => 'telegram',
                'url' => Backend::url('admin/telegram/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['admin.telegram.*'],
                'order' => 500,
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'admin.telegram::lang.settings.label',
                'description' => 'admin.telegram::lang.settings.description',
                'category' => SettingsManager::CATEGORY_NOTIFICATIONS,
                'icon' => 'icon-paper-plane-o',
                'order' => 500,
                'class' => Settings::class,
            ]
        ];
    }
}
