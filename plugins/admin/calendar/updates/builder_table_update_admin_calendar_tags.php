<?php namespace Admin\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminCalendarTags extends Migration
{
    public function up()
    {
        Schema::table('admin_calendar_tags', function($table)
        {
            $table->string('event_id');
        });
    }
    
    public function down()
    {
        Schema::table('admin_calendar_tags', function($table)
        {
            $table->dropColumn('event_id');
        });
    }
}
