<?php namespace Dizoo\Alerts\Models;

use Model;

/**
 * Model
 */
class Messages extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'dizoo_alerts_messages';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'message' => 'required',
        'type' => 'required'
    ];
}
