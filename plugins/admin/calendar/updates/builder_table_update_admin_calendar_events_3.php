<?php namespace Admin\Calendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminCalendarEvents3 extends Migration
{
    public function up()
    {
        Schema::table('admin_calendar_events', function($table)
        {
            $table->string('type', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('month', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_calendar_events', function($table)
        {
            $table->text('type')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->text('month')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
