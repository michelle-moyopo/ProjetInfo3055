<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BloodGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function blood_pockets()
    {
        return $this->hasMany(BloodPocket::class);
    }
}
