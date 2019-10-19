<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 50);
            $table->char('call_name', 15)->nullable();
            $table->integer('birth_place');
            $table->date('birth_date');
            $table->integer('city');
            $table->string('address');
            $table->char('code_pos', 6)->nullable();
            $table->char('phone', 12)->nullable();
            $table->boolean('campus')->nullable()->comment('0=non uin,1=UIN');
            $table->string('faculty', 50)->nullable();
            $table->string('majors', 50)->nullable();
            $table->boolean('status')->default(0)->comment('0=extra,1=intra');
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
        Schema::dropIfExists('user_profiles');
    }
}
