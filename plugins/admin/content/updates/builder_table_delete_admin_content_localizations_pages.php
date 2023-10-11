<?php namespace Admin\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAdminContentLocalizationsPages extends Migration
{
    public function up()
    {
        Schema::dropIfExists('admin_content_localizations_pages');
    }
    
    public function down()
    {
        Schema::create('admin_content_localizations_pages', function($table)
        {
            $table->integer('page_id');
            $table->string('localization_id', 255);
        });
    }
}
