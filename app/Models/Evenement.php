<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'description', 'date_evenement', 'lieu', 'organisateur_id', 'date_publication', 'etat_publication'
    ];

    public function organisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'organisateur_id');
    }

    public function dons()
    {
        return $this->hasMany(Don::class);
    }
}
