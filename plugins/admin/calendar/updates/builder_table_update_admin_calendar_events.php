<?php namespace Admin\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminCalendarEvents extends Migration
{
    public function up()
    {
        Schema::table('admin_calendar_events', function($table)
        {
            $table->text('comment')->nullable();
            $table->dateTime('date_reserv')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_calendar_events', function($table)
        {
            $table->dropColumn('comment');
            $table->date('date_reserv')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
