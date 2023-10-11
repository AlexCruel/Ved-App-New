<?php namespace Admin\Localization\Models;

use Model;

/**
 * Model
 */
class Localpage extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'admin_localization_localpages';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'pages' => [
            'Admin\Content\Models\Page',
            'table' => 'admin_localization_pages_pages',
            'order' => 'code'
        ]
    ];

}
