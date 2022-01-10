<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'telephone',
        'role_id',
        'email',
        'password',
        'enabled',
        'profile_picture',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function groupe()
    {
        return $this->hasMany(Groupe::class);
    }

    public function groupeusers()
    {
        return $this->hasMany(GroupeUser::class);
    }

    public function bloodbanks()
    {
        return $this->hasMany(BloodBank::class);
    }

    public function usersossignals()
    {
        return $this->hasMany(UserSosSignal::class);
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
