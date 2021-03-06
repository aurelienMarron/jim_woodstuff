@extends('app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('backofficeProduits.update',[$produit])}}">
        @method('PUT')
        @csrf
        <ul>
            <li> <input type="text" name="nom" value="{{$produit->nom}}"></li>
            <li> <input type="number" name="prix" step="0.01" value="{{$produit->prix}}" min="0"></li>
            <li> <input type="text" name="image" value="{{$produit->image}}"></li>
            <li><input type="text" name="description" value="{{$produit->image}}"></li>
            <li><input type="number" name="dispo" value="{{$produit->dispo}}" min="1" max="2"></li>
            <li><select name="categorie">
                    <libelle>Choisissez la catégorie</libelle>
                    @foreach($categories as $categorie)
                        @if($categorie->id===$produit->categorie_id)
                            <option value="{{$categorie->id}}" selected>{{$categorie->nom}}</option>
                        @else
                        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                        @endif
                    @endforeach
                </select> </li>
        </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Modification du produit</button>
    </form>

@endsection
