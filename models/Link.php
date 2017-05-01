<?php namespace SGDInstitute\Funny404\Models;

use Model;

/**
 * Model
 */
class Link extends Model
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
    public $table = 'sgdinstitute_funny404_links';

    public $belongsToMany = [
        'messages' => ['SGDInstitute\Funny404\Models\Message',
            'table' => 'sgdinstitute_funny404_messages_links'
        ]
    ];
}
