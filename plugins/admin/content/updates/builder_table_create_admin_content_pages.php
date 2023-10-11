<?php namespace Admin\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminContentPages extends Migration
{
    public function up()
    {
        Schema::create('admin_content_pages', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('code');
            $table->string('banner');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_content_pages');
    }
}
