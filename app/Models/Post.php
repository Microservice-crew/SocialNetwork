<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Commentaire;

class Post extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

     public function commentaires()
    {
        return $this->hasMany(Commentaire::class); // Assurez-vous que Commentaire::class pointe vers le bon modèle Commentaire
    }
    

    
    use HasFactory;

    protected $fillable = ['content', 'picture'];
}