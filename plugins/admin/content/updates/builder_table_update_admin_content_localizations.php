<?php namespace Admin\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminContentLocalizations extends Migration
{
    public function up()
    {
        Schema::rename('admin_content_pages_localization', 'admin_content_localizations');
        Schema::table('admin_content_localizations', function($table)
        {
            $table->renameColumn('name', 'localization_id');
            $table->dropColumn('id');
        });
    }
    
    public function down()
    {
        Schema::rename('admin_content_localizations', 'admin_content_pages_localization');
        Schema::table('admin_content_pages_localization', function($table)
        {
            $table->renameColumn('localization_id', 'name');
            $table->increments('id')->unsigned();
        });
    }
}
