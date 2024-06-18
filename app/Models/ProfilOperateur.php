<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilOperateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'utilisateur_id', 'denomination', 'raison_sociale', 'mission', 'activites', 'date_creation', 'logo', 'photo_profil', 'numero_enregistrement', 'preuve_enregistrement', 'taille_equipe', 'adresse_physique', 'adresse_postale', 'site_web', 'numero_compte_bancaire', 'statut_verification_kyc'
    ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
