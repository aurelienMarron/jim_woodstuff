<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Support\Facades\DB;


class ProduitController extends Controller
{
    public function catalogue(){
        $produitsEnStock=DB::select('SELECT * FROM produits ');
        //$produitsEnStock=DB::select('SELECT * FROM produits WHERE produits.dispo=1');


        return view('pages/catalogue',['catalogue'=>$produitsEnStock]);
    }


   /* public function detailProduit($id)
    {
        $produit=DB::select('SELECT * FROM products WHERE id=?',[$id]);
        return view('pages/detailProduit',['produit'=>$produit]);
    }*/

    public function detailProduit($id){
        $produit=DB::select('SELECT * FROM produits where produits.id=?',[$id]);
        return view('pages/detailProduit',
            ['detailProduit'=>$produit[0]]);
    }
}
