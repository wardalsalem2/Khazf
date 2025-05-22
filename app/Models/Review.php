<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = ['user_id', 'experience_id', 'rating', 'comment'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function experience(): BelongsTo {
        return $this->belongsTo(Experience::class);
    }
}

