<?php namespace Admin\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminCalendarEvents extends Migration
{
    public function up()
    {
        Schema::create('admin_calendar_events', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->date('date_reserv');
            $table->string('type');
            $table->string('person');
            $table->string('month');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_calendar_events');
    }
}
