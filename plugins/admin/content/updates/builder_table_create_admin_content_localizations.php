<?php namespace Admin\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminContentLocalizations extends Migration
{
    public function up()
    {
        Schema::create('admin_content_localizations', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_content_localizations');
    }
}
