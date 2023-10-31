<?php namespace Admin\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminCalendarTagsEvents extends Migration
{
    public function up()
    {
        Schema::create('admin_calendar_tags_events', function($table)
        {
            $table->integer('tag_id');
            $table->integer('event_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_calendar_tags_events');
    }
}
