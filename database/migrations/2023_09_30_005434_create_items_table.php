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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->enum('category', ['ELECTRONIQUE', 'VETEMENTS', 'MEUBLES', 'LIVRES', 'AUTRES']);
            $table->text('description');
            $table->enum('status', ['DISPONIBLE', 'NONDISPONIBLE']);
            $table->decimal('amount', 10, 2);
            $table->string('picture');
            $table->string('qrCode')->nullable();
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
        Schema::dropIfExists('items');
    }
};
