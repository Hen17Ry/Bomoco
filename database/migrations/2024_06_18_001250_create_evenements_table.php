<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->timestamp('date_evenement');
            $table->string('lieu');
            $table->foreignId('organisateur_id')->constrained('utilisateurs');
            $table->timestamp('date_publication')->nullable();
            $table->enum('etat_publication', ['Brouillon', 'Publie']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evenements');
    }
};
