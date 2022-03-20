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

    <form method="post" action="{{route('backofficeProduits.store')}}">
        @csrf
        <ul>
            <li> <input type="text" name="nom" placeholder="nom"></li>
            <li> <input type="number" name="prix" step="0.01" placeholder="prix" min="0"></li>
            <li> <input type="text" name="image" placeholder="image"></li>
            <li><input type="text" name="description" placeholder="description"></li>
            <li><input type="number" name="dispo" placeholder="dispo" min="1" max="2"></li>
        </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Création du produit</button>
    </form>


@endsection
