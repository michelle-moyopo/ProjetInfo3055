<?php

namespace App\Http\Controllers\informations;

use App\Models\FaqQuestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Faq extends Controller
{
    public function faq_don_de_sang()
    {
        $qat = FaqQuestion::all();
        $cat = CategoriesQuestion::all();
        return view('informations.faq.faq_don_de_sang', compact('qat','cat'));
    }

    public function faq_don_de_plasma()
    {
        return view('informations.faq.faq_don_de_plasma');
    }

    public function faq_don_de_plaquette()
    {
        return view('informations.faq.faq_don_de_plaquettes');
    }

    public function faq_don_de_cellules_souches()
    {
        return view('informations.faq.faq_don_de_cellules_souches');
    }
}
