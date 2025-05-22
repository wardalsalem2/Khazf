<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Experience extends Model
{
    protected $fillable = ['title', 'description', 'location', 'price', 'duration', 'categories', 'status', 'date'];

    public function bookings(): HasMany {
        return $this->hasMany(Booking::class);
    }

    public function reviews(): HasMany {
        return $this->hasMany(Review::class);
    }

    public function images(): HasMany {
        return $this->hasMany(ExperienceImage::class);
    }
}

