<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'date',
        'location',
        'image',
        'published_by',
    ];
    public function publisher()
    {
        return $this->belongsTo(User::class, 'published_by');
    }

}
