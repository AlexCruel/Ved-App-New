<?php namespace Admin\Localization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminLocalizationPagesPages extends Migration
{
    public function up()
    {
        Schema::create('admin_localization_pages_pages', function($table)
        {
            $table->integer('localization_id');
            $table->integer('page_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_localization_pages_pages');
    }
}
