<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenusTable extends Migration
{
    public function up()
    {
        Schema::create('contenus', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->enum('type_contenu', ['Article', 'Video', 'Podcast']);
            $table->timestamp('date_publication')->nullable();
            $table->enum('etat_publication', ['Brouillon', 'Publie']);
            $table->foreignId('auteur_id')->constrained('utilisateurs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contenus');
    }
};
