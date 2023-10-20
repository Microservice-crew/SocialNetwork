<?php

namespace App\Models;
use App\Models\ReponseReclamation;


use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    const TYPE_PROBLEME_TECHNIQUE = 'Problème Technique';
    const TYPE_CONTENU_INAPPROPRIE = 'Contenu Inapproprié';
    const TYPE_HARCELEMENT = 'Harcèlement';

    protected $fillable = ['user_id', 'content', 'type','picture'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(ReponseReclamation::class); 
    }

    public static function getReclamationTypeOptions()
    {
        return [
            self::TYPE_PROBLEME_TECHNIQUE => 'Problème Technique',
            self::TYPE_CONTENU_INAPPROPRIE => 'Contenu Inapproprié',
            self::TYPE_HARCELEMENT => 'Harcèlement',
        ];
    }
}
