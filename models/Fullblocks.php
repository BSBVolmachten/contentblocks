<?php namespace Bsbvolmachten\ContentBlocks\Models;

use Model;
use Cms\Classes\Page as Pg;
use Cms\Classes\Theme;

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

    protected $pages = [];

    public function getPageidOptions() {

        $theme = Theme::getEditTheme();
        $pages = Pg::listInTheme($theme, true);
        $options = [];

        foreach($pages as $page) {
            $options[$page->id] = $page->title;
        }
        asort($options);
        return $options;
    }

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
