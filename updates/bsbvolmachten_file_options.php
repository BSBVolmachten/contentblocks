<?php namespace BsbVolmachten\ContentBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Bsbvolmachtenfileoptions extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->boolean('titleswitch');
            $table->string('titlealign', 255);
        });
    }

    public function down()
    {
        Schema::table('bsbvolmachten_contentblocks_fullblocks', function($table)
        {
            $table->dropColumn('titleswitch');
            $table->dropColumn('titlealign');
        });
    }
}
