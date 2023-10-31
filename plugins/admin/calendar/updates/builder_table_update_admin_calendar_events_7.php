<?php namespace Admin\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminCalendarEvents7 extends Migration
{
    public function up()
    {
        Schema::table('admin_calendar_events', function($table)
        {
            $table->integer('tag_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_calendar_events', function($table)
        {
            $table->integer('tag_id')->nullable(false)->change();
        });
    }
}
