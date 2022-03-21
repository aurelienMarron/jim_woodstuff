<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Support\Facades\DB;


class ProduitController extends Controller
{
    public function catalogue(){
        $produitsEnStock=Produit::all();
        return view('pages/catalogue',['catalogue'=>$produitsEnStock]);
    }



    public function detailProduit($id){
        $produit=Produit::find($id);
        return view('pages/detailProduit',
            ['detailProduit'=>$produit]);
    }
}
