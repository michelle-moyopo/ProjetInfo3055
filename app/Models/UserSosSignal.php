<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSosSignal extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'sos_id', 'enabled'];

    public function sos()
    {
        return $this->belongsTo(Sos::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
