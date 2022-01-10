<?php

namespace App\Http\Controllers\informations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Faq extends Controller
{
    public function faq_don_de_sang()
    {
        return view('informations.faq.faq_don_de_sang');
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
