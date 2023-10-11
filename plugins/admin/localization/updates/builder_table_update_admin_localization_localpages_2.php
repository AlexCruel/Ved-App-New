<?php namespace Admin\Localization\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminLocalizationLocalpages2 extends Migration
{
    public function up()
    {
        Schema::table('admin_localization_localpages', function($table)
        {
            $table->string('code');
        });
    }
    
    public function down()
    {
        Schema::table('admin_localization_localpages', function($table)
        {
            $table->dropColumn('code');
        });
    }
}
