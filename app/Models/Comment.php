<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Beats;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'beat_id', 'comment'];

    public function beat()
    {
        return $this->belongsTo(Beat::class, 'beat_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
