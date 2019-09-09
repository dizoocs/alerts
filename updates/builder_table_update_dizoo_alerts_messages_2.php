<?php namespace Dizoo\Alerts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDizooAlertsMessages2 extends Migration
{
    public function up()
    {
        Schema::table('dizoo_alerts_messages', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('dizoo_alerts_messages', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
