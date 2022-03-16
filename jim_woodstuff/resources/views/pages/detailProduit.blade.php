
@extends('app')

@section('content')


    <div class="container">

    <h2 class="text-center" id="nomproduit">{{$detailProduit->nom}}</h2>
        <ul id="infosProduit">
    <li id="descriptionproduit">La description du sculpteur: {{$detailProduit->description}}</li>
    <li>{{$detailProduit->prix}}</li>
    <li>{{$detailProduit->dispo}}</li>
    <li>{{$detailProduit->image}}</li>
        </ul>
    </div>


@endsection
