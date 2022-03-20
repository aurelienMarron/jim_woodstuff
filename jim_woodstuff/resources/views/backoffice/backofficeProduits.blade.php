@extends('app')

@section('content')
@foreach($produits as $produit)
    <ul>
        <li>{{$produit->nom}}</li>
    </ul>
@endforeach
<a href="{{route('backofficeProduits.create')}}">Créer un nouveau produit</a>

@endsection

