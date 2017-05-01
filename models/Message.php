<?php namespace SGDInstitute\Funny404\Models;

use Model;

/**
 * Model
 */
class Message extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sgdinstitute_funny404_messages';

    public $belongsToMany = [
        'links' => [
            'SGDInstitute\Funny404\Models\Link',
            'table' => 'sgdinstitute_funny404_messages_links',
            'order' => 'title'
        ]
    ];

    public $attachOne = [
        'featured_image' => ['System\Models\File', 'order' => 'sort_order']
    ];
}
