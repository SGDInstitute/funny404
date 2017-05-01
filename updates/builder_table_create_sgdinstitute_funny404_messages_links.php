<?php namespace SGDInstitute\Funny404\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSgdinstituteFunny404MessagesLinks extends Migration
{
    public function up()
    {
        Schema::create('sgdinstitute_funny404_messages_links', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('message_id')->unsigned();
            $table->integer('link_id')->unsigned();
            $table->primary(['message_id','link_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sgdinstitute_funny404_messages_links');
    }
}
