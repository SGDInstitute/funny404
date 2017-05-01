<?php namespace SGDInstitute\Funny404\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSgdinstituteFunny404Links extends Migration
{
    public function up()
    {
        Schema::table('sgdinstitute_funny404_links', function($table)
        {
            $table->boolean('new_tab')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sgdinstitute_funny404_links', function($table)
        {
            $table->dropColumn('new_tab');
        });
    }
}
