<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Http\Controllers\Controller;
use App\Models\Categorie;

class BackofficeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        return view('backoffice/backofficeProduits', ['produits' => $produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('backoffice/nouveauProduit', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|unique:produits',
            'prix' => 'numeric|min:0',
            'dispo' => 'min:1|max:2|integer'
        ]);

        $produit = Produit::create(
            ['nom' => $request->input('nom'),
                'prix' => $request->input('prix'),
                'description' => $request->input('description'),
                'image' => $request->input('image'),
                'dispo' => $request->input('dispo'),
            ]);

        return redirect()->route('backofficeProduits.show', [$produit]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::find($id);
        return view('backoffice/detailProduit', ['produit' => $produit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        $categories = Categorie::all();
        return view('backoffice/modifProduit', ['produit' => $produit], ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit = Produit::find($id);
        $input = $request->all();
        $produit->fill($input)->save();


        return redirect()->route('backofficeProduits.show', [$produit]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produit::find($id)->delete();
        return redirect()->route('backofficeProduits.index');
    }
}
