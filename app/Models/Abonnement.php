<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'utilisateur_id', 'type_abonnement', 'date_debut', 'date_fin', 'statut'
    ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}

