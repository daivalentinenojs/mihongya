<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public $tableName = 'admins';

    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->char('uuid', 36)->unique();

            $table->string('firstname', 50);  
            $table->string('lastname', 50);            
            $table->string('phone', 20)->nullable()->default(null);
            $table->text('address')->nullable()->default(null);

            $table->string('email', 50);
            $table->string('password');

            $table->string('line_id', 50)->nullable()->default(null);
            $table->string('line_sub', 50)->nullable()->default(null);
            $table->string('line_aud', 20)->nullable()->default(null);
            $table->string('line_name', 50)->nullable()->default(null);
            $table->text('line_picture')->nullable()->default(null);
            $table->string('line_email', 50)->nullable()->default(null);
            $table->string('line_notify_token')->nullable()->default(null);            
            $table->rememberToken();

            $table->timestamp('last_login_at')->nullable()->default(null);
            $table->timestamp('confirm_at')->nullable()->default(null);  
            $table->timestamp('email_validation_at')->nullable()->default(null);          

            $table->unsignedTinyInteger('status')->default(1);  

            $table->char('role_id',36);
			$table->foreign('role_id')->references('uuid')->on('roles');
            
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
