<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupeMiddle extends Model
{
    use HasFactory;
    protected $fillable = ['groupe_user', 'total'];


    public function groupeuser()
    {
        return $this->belongsTo(GroupeUser::class,'groupe_user');
    }
}
