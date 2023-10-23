<?php namespace Admin\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminFeedbackForms extends Migration
{
    public function up()
    {
        Schema::create('admin_feedback_forms', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_feedback_forms');
    }
}
