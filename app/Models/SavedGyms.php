<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedGyms extends Model
{
    use HasFactory;

    protected $fillable = [
        "gym_id",
        "user_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }
}
