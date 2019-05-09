<?php namespace Bsbvolmachten\ContentBlocks\Models;

use Model;

/**
 * Model
 */
class Fullblocks extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bsbvolmachten_contentblocks_fullblocks';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required',
        'pageid' => 'required',
        'text' => 'required',
    ];
}
