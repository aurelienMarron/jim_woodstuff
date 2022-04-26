<?php

namespace App\Http\Controllers\Backoffice;


use Illuminate\Http\Request;
use App\Models\Produit;
use App\Http\Controllers\Controller;
use App\Models\Categorie;

class BackofficeCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('backoffice/backofficeCategories', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice/newCategorie');
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
            'nom' => 'required|unique:categories',
        ]);

        $categorie = Categorie::create(
            [
                'nom' => $request->input('nom'),
                'description' => $request->input('description'),
            ]
        );

        return redirect()->route('backofficeCategories.show', [$categorie]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);
        return view('backoffice/detailCategorie', ['categorie' => $categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('backoffice/modifCategorie',['categorie'=>$categorie]);
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
        $categorie = Categorie::find($id);
        $input = $request->all();
        $categorie->fill($input)->save();

        return redirect()->route('backofficeCategories.show', [$categorie]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorie::find($id)->delete();
        return redirect()->route('backofficeCategories.index');
    }
}
