<?php namespace BsbVolmachten\ContentBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenContentblocksFullblocks2 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->boolean('imgswitch');
        });
    }
    
    public function down()
    {
        Schema::table('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->dropColumn('imgswitch');
        });
    }
}
