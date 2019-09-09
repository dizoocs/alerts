<?php namespace Dizoo\Alerts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDizooAlertsMessages extends Migration
{
    public function up()
    {
        Schema::create('dizoo_alerts_messages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('message', 510);
            $table->string('type', 10);
            $table->boolean('removable')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dizoo_alerts_messages');
    }
}
