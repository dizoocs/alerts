<?php namespace Dizoo\Alerts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDizooAlertsMessages extends Migration
{
    public function up()
    {
        Schema::table('dizoo_alerts_messages', function($table)
        {
            $table->boolean('status')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('dizoo_alerts_messages', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
