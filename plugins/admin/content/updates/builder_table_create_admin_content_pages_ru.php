<?php namespace Admin\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminContentPagesRu extends Migration
{
    public function up()
    {
        Schema::create('admin_content_pages_ru', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('page_id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_content_pages_ru');
    }
}
