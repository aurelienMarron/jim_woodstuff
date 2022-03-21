
@extends('app')

@section('content')


    <div class="container">

        <h2 class="text-center" id="nomproduit">{{$detailProduit->nom}}</h2>
        <div class="row">
            <div class="col-md-7 " id="imageDetailProduit">
                @if($detailProduit->image!=NULL)
                    <img src="/img/{{$detailProduit->image}}" alt="" height="400">
                @else
                    <img src="/img/rupture.png" alt="" height="400">
                @endif
            </div>
            <div class="col-md-5">
                <ul id="infosProduit">
                    <li id="descriptionproduit">La description du sculpteur: {{$detailProduit->description}}</li>
                    <li>Et ça coûte combien ? Seulement {{$detailProduit->prix}} euros, franchement c'est cadeau!!</li>
                    <li>
                        @if($detailProduit->dispo===1)
                            Cette merveille est en stock !!
                        @elseif($detailProduit->dispo===2)
                            Malheuresement il n'y en a plus en stock, et ouais c'est le risque avec du fait main !
                        @endif
                    </li>
                    <li>Categorie: {{$detailProduit->categorie->nom}}</li>
                </ul>
            </div>
        </div>
    </div>


@endsection
