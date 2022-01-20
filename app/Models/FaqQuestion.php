<?php

namespace App\Models;

use App\Models\CategoriesQuestion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FaqQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['type_cathegories','question','answer'];

    public function categoriequestion()
    {
        return $this->belongsTo(CategoriesQuestion::class,'type_cathegories');
    }
}
