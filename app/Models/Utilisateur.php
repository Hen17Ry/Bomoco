<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prenom', 'email', 'mot_de_passe', 'telephone', 'type_compte', 'statut', 'code_validation', 'code_valide', 'date_derniere_connexion'
    ];

    protected $hidden = [
        'mot_de_passe', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profilContributeur()
    {
        return $this->hasOne(ProfilContributeur::class);
    }

    public function profilOperateur()
    {
        return $this->hasOne(ProfilOperateur::class);
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class, 'auteur_id');
    }

    public function evenements()
    {
        return $this->hasMany(Evenement::class, 'organisateur_id');
    }

    public function abonnements()
    {
        return $this->hasMany(Abonnement::class);
    }

    public function donsDonateur()
    {
        return $this->hasMany(Don::class, 'donateur_id');
    }

    public function donsBeneficiaire()
    {
        return $this->hasMany(Don::class, 'beneficiaire_id');
    }
}

