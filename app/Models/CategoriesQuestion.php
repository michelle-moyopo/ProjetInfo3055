<?php

namespace App\Models;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriesQuestion extends Model
{
    use HasFactory;
    protected $fillable = ['type_faq','cathegories'];

    public function faq()
    {
        return $this->belongsTo(Faq::class,'type_faq');
    }
}
