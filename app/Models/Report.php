<?php

namespace App\Models;

use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'report',
        'user_id',
        'review_id',
        // Add more fields as per your Report model fillable attributes
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
