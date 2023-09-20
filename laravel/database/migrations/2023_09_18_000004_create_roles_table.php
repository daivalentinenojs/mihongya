<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public $tableName = 'roles';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->char('uuid', 36)->unique();

            $table->string('name', 50);   
            
            $table->nullableTimestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
