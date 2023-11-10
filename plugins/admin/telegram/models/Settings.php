<?php namespace Admin\Telegram\Models;

use Model;

/**
 * Settings Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $implement = [
        'System.Behaviors.SettingsModel',
    ];

    public $settingsCode = 'admin_telegram_settings';

    public $settingsFields = 'fields.yaml';
}
