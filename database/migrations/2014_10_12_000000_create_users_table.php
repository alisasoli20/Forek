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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string("mail_hash")->nullable();
            $table->string("provider_id")->nullable();
            $table->string("number")->nullable();
            $table->string('password')->nullable();
            $table->text("profile_text")->nullable();
            $table->string("image")->nullable();
            $table->string("city")->nullable();
            $table->string("country")->nullable();
            $table->string("role")->default("user");
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
