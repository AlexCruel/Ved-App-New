<?php namespace Admin\Calendar\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'admin_calendar_events';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
