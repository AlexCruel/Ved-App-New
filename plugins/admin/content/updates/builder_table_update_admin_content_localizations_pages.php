<?php namespace Admin\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminContentLocalizationsPages extends Migration
{
    public function up()
    {
        Schema::rename('admin_content_pages_localizations', 'admin_content_localizations_pages');
    }
    
    public function down()
    {
        Schema::rename('admin_content_localizations_pages', 'admin_content_pages_localizations');
    }
}
