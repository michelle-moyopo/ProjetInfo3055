<?php

namespace App\Http\Controllers\informations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Qui_peut_donner extends Controller
{
    public function qpd_condition()
    {
        return view('informations.qui_peut_donner.qpd_condition');
    }

    public function qpd_contre_indications()
    {
        return view('informations.qui_peut_donner.qpd_contre_indication');
    }

    public function qpd_delai_entre_2_don()
    {
        return view('informations.qui_peut_donner.qpd_delai_entre_2_don');
    }

    public function qpd_puis_je_donner()
    {
        return view('informations.qui_peut_donner.qpd_puis_je_donner');
    }
}
