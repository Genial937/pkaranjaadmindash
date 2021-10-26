<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->unique()->nullable();
            $table->string('last_name')->nullable();
            $table->string('other_names')->nullable();
            $table->string('username')->nullable();
            $table->string('user_type')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('designation')->nullable();
            $table->string('designationID')->nullable();
            $table->enum('status', array(0,1))->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('created_by')->nullable();
            $table->string('changed_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
