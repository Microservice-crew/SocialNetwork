<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReponseReclamation extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function reclamation()
    {
        return $this->belongsTo(Reclamation::class);
    }

    use HasFactory;

    protected $fillable = ['content'];
}