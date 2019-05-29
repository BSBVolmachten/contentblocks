<?php namespace Bsbvolmachten\ContentBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenContentblocksFullblocks4 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}