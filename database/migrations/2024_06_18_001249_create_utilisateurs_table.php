<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('mot_de_passe');
            $table->string('telephone')->nullable();
            $table->enum('type_compte', ['Contributeur', 'Operateur', 'Administrateur', 'Editeur']);
            $table->enum('statut', ['Actif', 'Inactif', 'En attente']);
            $table->string('code_validation')->nullable();
            $table->enum('code_valide', ['Oui', 'Non'])->default('Non');
            $table->timestamps();
            $table->timestamp('date_derniere_connexion')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
};