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
       Schema::create('events',function(Blueprint $table){
           $table->id();
           $table->string('nom');

            $table->string('Lieu');
            $table->string('categorie')->default('Autre');
            $table->date('date');
            $table->text('description');
           $table->dateTime('start');
           $table->dateTime('end')->nullable();
           $table->string('color');
//           $table->string('image');
           $table->string('image_path')->nullable(); // Vous pouvez rendre cette colonne nullable si nécessaire


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
        //
        Schema::dropIfExists('events');
    }
};
