<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    protected $fillable = ['title', 'content', 'group_id'];
}
