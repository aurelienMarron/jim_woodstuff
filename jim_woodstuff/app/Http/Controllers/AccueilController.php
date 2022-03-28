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

//$user=$request->session()->all();
        //$user=$request->session()->get('user_id');
       // $user=$request->getAuth()->getAccount();
        return view('backoffice/backofficeAccueil',['user'=>$user]);
    }
}
