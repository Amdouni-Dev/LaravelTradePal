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
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->string('nomUser');
            $table->string('proposedObject');
            $table->text('descriptionObject');
            $table->string('statusObject')->default('Autre');
            $table->string('changedBy'); // hedhy chnarbeth bel le sproduits elli mawjoudin fel base , tokhrejli lista feiha les produis lkol w ena nakhtar b chnowa de prefernce nbaddelha
            $table->foreignId('event_id')->constrained()->onDelete('cascade');

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
        Schema::dropIfExists('participations');
    }
};
