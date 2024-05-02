<?php

namespace App\Models;

use App\Models\Traits\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, Likeable;

    protected $fillable = ['body', 'user_id'];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//    public function getCreatedAtInHumanAttribute()
//    {
//        return (new Verta($this->created_at))->formatDifference();
//    }
}
