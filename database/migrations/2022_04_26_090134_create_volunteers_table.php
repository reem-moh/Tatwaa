<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign("user_id")->references("id")
                ->on("users")
                ->onDelete("cascade");
            $table->string('user_name')->nullable();
            //$table->foreign("user_name")->references("name")
              //  ->on("users")
                //->onDelete("cascade");
            $table->string("user_email");
            $table->string("user_mobile");
            $table->bigInteger('agency_id')->unsigned();
            $table->foreign("agency_id")->references("id")
                ->on("agencies");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
};
