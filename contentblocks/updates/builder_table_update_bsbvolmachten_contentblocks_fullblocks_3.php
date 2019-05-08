<?php namespace BsbVolmachten\ContentBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenContentblocksFullblocks3 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->string('url_text', 30)->change();
        });
    }
    
    public function down()
    {
        Schema::table('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->string('url_text', 20)->change();
        });
    }
}
