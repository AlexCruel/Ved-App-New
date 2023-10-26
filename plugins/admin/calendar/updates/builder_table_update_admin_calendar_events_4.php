<?php namespace Admin\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminCalendarEvents4 extends Migration
{
    public function up()
    {
        Schema::table('admin_calendar_events', function($table)
        {
            $table->dropColumn('month');
        });
    }
    
    public function down()
    {
        Schema::table('admin_calendar_events', function($table)
        {
            $table->string('month', 255);
        });
    }
}
