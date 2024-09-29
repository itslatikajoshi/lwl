<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // Define accessor for created_at
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('F j, Y, g:i A');
    }

    // Define accessor for updated_at
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('F j, Y, g:i A');
    }
    // To append Joshi after each first name
    /* public function getNameAttribute($value)
     {
         return $value.' Joshi';
     } */
    public function getNameAttribute($value)
    {
        return $value;
    }
    public function setNameAttribute($value)
    {
        // You can ignore $value since you are constructing name from first_name and last_name
        $this->attributes['name'] = $this->first_name . ' ' . $this->last_name;
    }
}
