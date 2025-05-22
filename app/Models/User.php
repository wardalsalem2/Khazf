<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    public function bookings(): HasMany {
        return $this->hasMany(Booking::class);
    }

    public function reviews(): HasMany {
        return $this->hasMany(Review::class);
    }

    public function payments(): HasMany {
        return $this->hasMany(Payment::class);
    }
}
