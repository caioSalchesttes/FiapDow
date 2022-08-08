<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    public function score()
    {
        return $this->hasMany(Score::class, 'member_id');
    }

    public function team()
    {
        return $this->belongsTo(Teams::class);        
    }
}
