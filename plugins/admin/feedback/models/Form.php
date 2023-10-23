<?php namespace Admin\Feedback\Models;

use Model;

/**
 * Model
 */
class Form extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'admin_feedback_forms';

    protected $fillable = ['name', 'phone', 'email', 'message'];

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
