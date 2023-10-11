<?php namespace Admin\Localization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminLocalizationPages extends Migration
{
    public function up()
    {
        Schema::create('admin_localization_pages', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_localization_pages');
    }
}
