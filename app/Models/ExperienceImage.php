<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExperienceImage extends Model
{
    protected $fillable = ['experience_id', 'image_path'];

    public function experience(): BelongsTo {
        return $this->belongsTo(Experience::class);
    }
}

