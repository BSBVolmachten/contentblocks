<?php namespace BsbVolmachten\ContentBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenContentblocksFullblocks extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->integer('sort_order');
            $table->string('pageid', 255);
        });
    }
    
    public function down()
    {
        Schema::table('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->dropColumn('sort_order');
            $table->dropColumn('pageid');
        });
    }
}
