<?php namespace Admin\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAdminContentLocalizations extends Migration
{
    public function up()
    {
        Schema::dropIfExists('admin_content_localizations');
    }
    
    public function down()
    {
        Schema::create('admin_content_localizations', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name', 255);
        });
    }
}
