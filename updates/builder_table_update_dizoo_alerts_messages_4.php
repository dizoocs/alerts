<?php namespace Dizoo\Alerts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDizooAlertsMessages4 extends Migration
{
    public function up()
    {
        Schema::table('dizoo_alerts_messages', function($table)
        {
            $table->date('enddate');
        });
    }
    
    public function down()
    {
        Schema::table('dizoo_alerts_messages', function($table)
        {
            $table->dropColumn('enddate');
        });
    }
}
