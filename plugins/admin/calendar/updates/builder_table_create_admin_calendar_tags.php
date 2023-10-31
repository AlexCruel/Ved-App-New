<?php namespace Admin\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminCalendarTags extends Migration
{
    public function up()
    {
        Schema::create('admin_calendar_tags', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_calendar_tags');
    }
}
