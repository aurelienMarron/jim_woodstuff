@extends('app')

@section('content')
    @foreach($produits as $produit)
        <ul>
            <a href="{{route('backofficeProduits.show',[$produit])}}">
                <li>{{$produit->nom}}</li>
            </a>
        </ul>
    @endforeach
    <a href="{{route('backofficeProduits.create')}}">Créer un nouveau produit</a>

@endsection

