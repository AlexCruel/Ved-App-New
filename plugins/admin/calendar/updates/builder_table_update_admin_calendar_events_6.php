<?php namespace Admin\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminCalendarEvents6 extends Migration
{
    public function up()
    {
        Schema::table('admin_calendar_events', function($table)
        {
            $table->integer('tag_id');
        });
    }
    
    public function down()
    {
        Schema::table('admin_calendar_events', function($table)
        {
            $table->dropColumn('tag_id');
        });
    }
}
