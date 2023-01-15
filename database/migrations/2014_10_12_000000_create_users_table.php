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
            $table->string('name');
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('nid_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('photo')->nullable();
            $table->string('nomini_name')->nullable();
            $table->string('nomini_photo')->nullable();
            $table->string('nomini_phone')->nullable();
            $table->string('nomini_dob')->nullable(); // dorkar nai
            $table->string('nomini_address')->nullable();
            $table->string('nomini_nid')->nullable();
            $table->string('nomini_passport')->nullable();
            $table->string('business_name')->nullable(); //x
            $table->string('trade_license')->nullable(); //x
            $table->string('tin_number')->nullable(); //x
            $table->string('account_type')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
