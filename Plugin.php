<?php namespace Bsbvolmachten\ContentBlocks;

use System\Classes\PluginBase;
use App;

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

    public function register(){
        $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
    }
}
