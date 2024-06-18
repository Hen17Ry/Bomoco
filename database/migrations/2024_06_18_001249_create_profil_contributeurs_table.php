<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilContributeursTable extends Migration
{
    public function up()
    {
        Schema::create('profil_contributeurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs');
            $table->string('denomination');
            $table->string('raison_sociale')->nullable();
            $table->text('mission')->nullable();
            $table->text('activites')->nullable();
            $table->timestamp('date_creation')->nullable();
            $table->string('logo')->nullable();
            $table->string('photo_profil')->nullable();
            $table->string('numero_enregistrement')->nullable();
            $table->string('preuve_enregistrement')->nullable();
            $table->integer('taille_equipe')->nullable();
            $table->string('adresse_physique')->nullable();
            $table->string('adresse_postale')->nullable();
            $table->string('site_web')->nullable();
            $table->string('numero_compte_bancaire')->nullable();
            $table->enum('statut_verification_kyc', ['En attente', 'Verifie', 'Rejete'])->default('En attente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profil_contributeurs');
    }
};
