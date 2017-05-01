<?php namespace SGDInstitute\Funny404\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSgdinstituteFunny404Links extends Migration
{
    public function up()
    {
        Schema::create('sgdinstitute_funny404_links', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sgdinstitute_funny404_links');
    }
}
