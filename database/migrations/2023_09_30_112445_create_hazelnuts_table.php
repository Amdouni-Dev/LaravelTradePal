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
        Schema::create('hazelnuts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            // ->index() à utiliser avec une bd postgres dans une bd mysql il est automatiquement indexé
            $table->unsignedInteger('amount');
            $table->enum('status', ['active', 'expired', 'pending'])->default('active');
            $table->timestamp('expiration_date')->nullable();
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
        Schema::dropIfExists('hazelnuts');
    }
};
