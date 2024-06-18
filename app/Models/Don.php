<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    use HasFactory;

    protected $fillable = [
        'donateur_id', 'beneficiaire_id', 'montant', 'date_don', 'type_don', 'contenu_id', 'evenement_id'
    ];

    public function donateur()
    {
        return $this->belongsTo(Utilisateur::class, 'donateur_id');
    }

    public function beneficiaire()
    {
        return $this->belongsTo(Utilisateur::class, 'beneficiaire_id');
    }

    public function contenu()
    {
        return $this->belongsTo(Contenu::class, 'contenu_id');
    }

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'evenement_id');
    }
}

