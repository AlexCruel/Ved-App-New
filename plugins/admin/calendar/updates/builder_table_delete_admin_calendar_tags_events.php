<?php namespace Admin\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAdminCalendarTagsEvents extends Migration
{
    public function up()
    {
        Schema::dropIfExists('admin_calendar_tags_events');
    }
    
    public function down()
    {
        Schema::create('admin_calendar_tags_events', function($table)
        {
            $table->integer('tag_id');
            $table->integer('event_id');
        });
    }
}
