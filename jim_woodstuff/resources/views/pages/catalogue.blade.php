@extends('app')

@section('content')
<div class="container">
    <h1 style="margin:3%">Catalogue</h1>
    <div class="row justify-content-around">
        @foreach($catalogue as $produit)
            @if($produit->dispo===1)
            <div class="col-md-3" id="catalogue">
                <div class="card-body">
                    <h5 class="card-title">{{$produit->nom}}</h5>
                    <p>Prix: {{$produit->prix}} euros</p>
                    <div class="text-center">
                        <a href="/detailProduit/{{$produit->id}}">
                    <img src="/img/{{$produit->image}}" alt="" height="200" >
                        </a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
            <h2>Produits en rupture de stock</h2>
    <div class="row">
        @foreach($catalogue as $produit)
                @if($produit->dispo===2)
                    <div class="col-md-2" id="catalogue">
                        <div class="card-body">
                            <h5 class="card-title">{{$produit->nom}}</h5>
                            <p>Prix: {{$produit->prix}} euros</p>
                            <img src="/img/rupture.png" alt="" height="100">
                        </div>
                    </div>
                @endif
        @endforeach
    </div>


</div>


@endsection
