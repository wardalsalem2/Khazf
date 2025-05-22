<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    protected $fillable = ['user_id', 'experience_id', 'booking_date', 'number_of_people', 'total_price', 'status'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function experience(): BelongsTo {
        return $this->belongsTo(Experience::class);
    }

    public function payment(): HasMany {
        return $this->hasMany(Payment::class);
    }
}
