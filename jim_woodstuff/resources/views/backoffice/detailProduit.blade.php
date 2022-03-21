
@extends('app')

@section('content')


    <div class="container">

        <h2 class="text-center" id="nomproduit">{{$produit->nom}}</h2>
        <div class="row">
            <div class="col-md-7 " id="imageDetailProduit">
                @if($produit->image!=NULL)
                    <img src="/img/{{$produit->image}}" alt="" height="400">
                @else
                    <img src="/img/rupture.png" alt="" height="400">
                @endif
            </div>
            <div class="col-md-5">
                <ul id="infosProduit">
                    <li id="descriptionproduit">La description du sculpteur: {{$produit->description}}</li>
                    <li>Et ça coûte combien ? Seulement {{$produit->prix}} euros, franchement c'est cadeau!!</li>
                    <li>
                        @if($produit->dispo===1)
                            Cette merveille est en stock !!
                        @elseif($produit->dispo===2)
                            Malheuresement il n'y en a plus en stock, et ouais c'est le risque avec du fait main !
                        @endif
                    </li>
                    <li>Categorie: {{$produit->categorie->nom}}</li>
                </ul>
            </div>
        </div>
        <a href="{{route('backofficeProduits.edit',[$produit])}}">Mofifier le produit</a>
        <form method="POST" action="{{route('backofficeProduits.destroy',[$produit])}}">
            @method('DELETE')
            @csrf
            <button  type="submit" class="btn btn-dark btn-outline-light">Supprimer le produit</button>
        </form>
    </div>


@endsection

