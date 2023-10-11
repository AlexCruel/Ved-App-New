<?php namespace Admin\Localization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminLocalizationPagesPages extends Migration
{
    public function up()
    {
        Schema::table('admin_localization_pages_pages', function($table)
        {
            $table->renameColumn('localization_id', 'localpage_id');
        });
    }
    
    public function down()
    {
        Schema::table('admin_localization_pages_pages', function($table)
        {
            $table->renameColumn('localpage_id', 'localization_id');
        });
    }
}
