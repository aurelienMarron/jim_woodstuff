<?php

namespace App\Http\Controllers;


class AccueilController extends Controller
{
    public function homePage()
    {
        return view('pages/accueil');
    }
}
