<?php namespace Admin\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminContentPagesLocalization extends Migration
{
    public function up()
    {
        Schema::rename('admin_content_pages_ru', 'admin_content_pages_localization');
    }
    
    public function down()
    {
        Schema::rename('admin_content_pages_localization', 'admin_content_pages_ru');
    }
}
