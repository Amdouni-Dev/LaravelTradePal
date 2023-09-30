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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('desired_id');
            $table->foreign('desired_id')->references('id')->on('items');
    
           
            $table->unsignedBigInteger('exchangeable_id');
            $table->foreign('exchangeable_id')->references('id')->on('items'); 
    
            
            $table->string('note');
            $table->enum('status', ['EN_COURS', 'CONFIRME', 'ANNULE']);
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
        Schema::dropIfExists('requests');
    }
};
