<?php namespace Admin\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminContentPagesLocalizations extends Migration
{
    public function up()
    {
        Schema::rename('admin_content_localizations', 'admin_content_pages_localizations');
    }
    
    public function down()
    {
        Schema::rename('admin_content_pages_localizations', 'admin_content_localizations');
    }
}
