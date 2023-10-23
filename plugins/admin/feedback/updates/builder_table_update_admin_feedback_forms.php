<?php namespace Admin\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminFeedbackForms extends Migration
{
    public function up()
    {
        Schema::table('admin_feedback_forms', function($table)
        {
            $table->text('message')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('admin_feedback_forms', function($table)
        {
            $table->dropColumn('message');
        });
    }
}
