<?php

namespace App\Models;

use App\Models\Region;
use App\Models\BloodBank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['region_id', 'name'];

    public function region()
    {
        return $this->belongsTo(Region::class,'region_id');
    }
    public function bloodbank()
    {
        return $this->hasMany(BloodBank::class);
    }

}
