<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrySectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_section', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('position')->unsigned();
            createDefaultRelationshipTableFields($table, 'entry', 'section');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entry_section');
    }
}
