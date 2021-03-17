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
            $table->string('name', 225);
            $table->string('email', 225)->unique();
            $table->string('password', 225);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('rememberToken', 100);
            $table->timestamps();
            // $table->timestamps('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            // $table->timestamps('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
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
