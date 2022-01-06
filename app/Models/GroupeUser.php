<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupeUser extends Model
{
    use HasFactory;
    protected $fillable = ['groupe_id', 'user_id', 'enabled'];

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    public function user()
    {
        return $this->hasMany()(User::class);
    }
}
