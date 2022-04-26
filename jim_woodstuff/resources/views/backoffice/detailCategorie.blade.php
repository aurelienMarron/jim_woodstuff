@extends('app')

@section('content')

    <div class="container">

        <h2 class="text-center" id="nomproduit">CATEGORIE : {{$categorie->nom}}</h2>
        <div class="text-center">
                <ul>
                    <li id="descriptionproduit"><h3>La description du sculpteur: {{$categorie->description}}</h3></li>
                    <li><div> <ul><h4 class="card-title">Produit(s) de la catégorie</h4>
                                @foreach($categorie->produits as $produit)
                                    <li class="list-group-item"> {{$produit->nom}}</li>
                                @endforeach
                            </ul></div></li>
                </ul>
        </div>
        <a href="{{route('backofficeCategories.edit',[$categorie])}}">Mofifier la catégorie</a>
        <form method="POST" action="{{route('backofficeCategories.destroy',[$categorie])}}">
            @method('DELETE')
            @csrf
            <button  type="submit" class="btn btn-dark btn-outline-light">Supprimer la catégorie</button>
        </form>
    </div>

    @endsection
