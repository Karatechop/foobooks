<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPageCountFieldToBooksTable extends Migration {

	
	public function up()
	{
		Schema::table('books',function($table) {
        $table->integer('page_count');
});
	}

	
	public function down()
	{
		Schema::table('books', function($table) {
    $table->dropColumn('page_count');
});

	}
	
}
