<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $fillable = [
        'type', // Le type de réaction, par exemple, "Adoré", "Aimé", "En colère", etc.
        'user_id', // L'ID de l'utilisateur qui a émis la réaction.
        'avis_id', // L'ID de l'avis auquel la réaction est associée.
        'date_reaction', // La date à laquelle la réaction a été émise.
    ];

    // Définition des relations avec d'autres entités si nécessaire
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function avis()
    {
        return $this->belongsTo(Avis::class, 'avis_id');
    }
}
