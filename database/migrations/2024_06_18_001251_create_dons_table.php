<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonsTable extends Migration
{
    public function up()
    {
        Schema::create('dons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donateur_id')->constrained('utilisateurs');
            $table->foreignId('beneficiaire_id')->constrained('utilisateurs');
            $table->decimal('montant', 10, 2);
            $table->timestamp('date_don')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('type_don', ['Contenu', 'Evenement']);
            $table->foreignId('contenu_id')->nullable()->constrained('contenus');
            $table->foreignId('evenement_id')->nullable()->constrained('evenements');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dons');
    }
};
