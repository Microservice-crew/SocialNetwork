<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id', // The ID of the associated event
        'user_id',  // The ID of the user who made the comment
        'content',  // The content of the comment
        'created_at',

    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
