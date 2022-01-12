<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Groupe extends Model
{
    use HasFactory;

<<<<<<< Updated upstream
    protected $fillable = ['name', 'description','user_id', 'enabled'];
=======
    protected $fillable = ['name', 'description', 'enabled',];
>>>>>>> Stashed changes

    public function groupe_users()
    {
        return $this->hasMany(GroupeUser::class);
    }

    public function user()
    {
        return $this->belongsTo()(User::class, 'user_id');
    }
}
