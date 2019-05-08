<?php namespace BsbVolmachten\ContentBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBsbvolmachtenContentblocksFullblocks extends Migration
{
    public function up()
    {
        Schema::create('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->text('text');
            $table->string('url', 255);
            $table->string('url_text', 20);
            $table->boolean('urlswitch');
            $table->string('align', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bsbvolmachten_contentblocks_fullblocks');
    }
}
