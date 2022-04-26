@extends('app')

@section('content')

    @foreach($categories as $categorie)
        <ul>
            <a href="{{route('backofficeCategories.show',[$categorie])}}">
                <li>{{$categorie->nom}}</li>
            </a>
        </ul>
    @endforeach
    <a href="{{route('backofficeCategories.create')}}">Créer une nouvelle catégorie</a>

@endsection
