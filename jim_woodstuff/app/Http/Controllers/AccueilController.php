<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class AccueilController extends Controller
{
    public function homePage()
    {
        return view('pages/accueil');
    }

    public function backoffice(Request $request){



        $user=$request->session()->all();


        return view('backoffice/backofficeAccueil',['user'=>$user]);
    }
}
