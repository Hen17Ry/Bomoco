<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'description', 'type_contenu', 'date_publication', 'etat_publication', 'auteur_id'
    ];

    public function auteur()
    {
        return $this->belongsTo(Utilisateur::class, 'auteur_id');
    }

    public function dons()
    {
        return $this->hasMany(Don::class);
    }
}

