<?php namespace Admin\Localization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminLocalizationPagesPages3 extends Migration
{
    public function up()
    {
        Schema::table('admin_localization_pages_pages', function($table)
        {
            $table->integer('localpage_id')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_localization_pages_pages', function($table)
        {
            $table->integer('localpage_id')->nullable()->change();
        });
    }
}
