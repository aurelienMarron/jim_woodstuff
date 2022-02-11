<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function catalogue(){
        $produits=DB::select('SELECT * FROM produits');

        return view('pages/catalogue',['catalogue'=>$produits]);
    }
}
