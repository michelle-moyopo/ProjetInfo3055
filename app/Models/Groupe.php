<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description','user_id', 'enabled'];

    public function user()
    {
        return $this->belongsTo()(User::class, 'user_id');
    }
}
