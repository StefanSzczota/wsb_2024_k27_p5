<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;

class Beats extends Model
{
    use HasFactory;
    protected $table = 'beats';
    protected $fillable = [
        'title',
        'info',
        'ytlink',
        'price',
    ];

    public function comments()
    {
   //     return $this->hasMany(Comment::class);
        return $this->hasMany(Comment::class, 'beat_id');
    }
}
