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

    // Get tags for Dropdown widget
    // Name is "tag_id" equals TagId
    public function getTagIdOptions()
    {
        $tags = Tag::all();

        $tagsArr = [];
        $tagsArr['0'] = 'Выбрать событие';  // Default non-value

        foreach ($tags as $item)
        {
            $tagsArr[$item['id']] = $item['name'];
        }

        return $tagsArr;
    }
}
