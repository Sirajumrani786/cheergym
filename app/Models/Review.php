<?php
namespace App\Models;


use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'feedback',
        'facilities_rating',
        'coaching_rating',
        'atmosphere_rating',
        'equipment_quality', // added field
        'safety_standards',  // added field
        'communication',     // added field
        'value_for_money',   // added field
        'class_variety',     // added field
        'status',
        'user_id',
        'gym_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
