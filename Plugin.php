<?php namespace Bsbvolmachten\ContentBlocks;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Bsbvolmachten\Contentblocks\Components\Fullblocks' => 'fullblocks',
        ];
    }

    public function registerSettings()
    {
    }
}
