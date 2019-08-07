<?php
namespace Bsbvolmachten\Contentblocks\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Contentblocks\Models\Fullblocks as Fullblock;

class Fullblocks extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Content Blocks',
            'description' => 'Laat content blok zien op de pagina.'
        ];
    }

    public function onRun() {
        $blocks = $this->getBlocks()  ;
        if ($blocks->isNotEmpty()) {
            $this->page['fullblocks'] = $blocks;
        } else {
            $this->page['fullblocks'] = false;
        }
    }

    public function getBlocks()
    {
        return Fullblock::orderBy('sort_order', 'ASC')->where('pageid', $this->page->id)->get();
    }
}