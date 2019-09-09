<?php namespace Dizoo\Alerts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDizooAlertsMessages3 extends Migration
{
    public function up()
    {
        Schema::table('dizoo_alerts_messages', function($table)
        {
            $table->string('title', 255);
        });
    }
    
    public function down()
    {
        Schema::table('dizoo_alerts_messages', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
