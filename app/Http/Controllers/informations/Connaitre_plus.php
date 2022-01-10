<?php

namespace App\Http\Controllers\informations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Connaitre_plus extends Controller
{
    public function cp_groupe_sanguins()
    {
        return view('informations.connaitre_plus.groupes_sanguins');
    }

    public function cp_histoire_du_sang()
    {
        return view('informations.connaitre_plus.histoire_du_sang');
    }

    public function cp_les_produits_sanguins()
    {
        return view('informations.connaitre_plus.les_produits_sanguins');
    }

    public function cp_parcours_d_une_poche_de_sang()
    {
        return view('informations.connaitre_plus.parcours_d_une_poche_de_sang');
    }

    public function cp_qu_est_ce_que_le_sang()
    {
        return view('informations.connaitre_plus.qu_ce_que_le_sang');
    }
}
