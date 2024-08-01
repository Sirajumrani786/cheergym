<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'contact',
        'location',
        'state',
        'thumbnail',
        'fees',
        'timing_from',
        'timing_to',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // ... other relationships and methods ...

}
