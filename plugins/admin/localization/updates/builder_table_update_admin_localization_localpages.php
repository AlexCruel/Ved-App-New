<?php namespace Admin\Localization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminLocalizationLocalpages extends Migration
{
    public function up()
    {
        Schema::rename('admin_localization_pages', 'admin_localization_localpages');
    }
    
    public function down()
    {
        Schema::rename('admin_localization_localpages', 'admin_localization_pages');
    }
}
