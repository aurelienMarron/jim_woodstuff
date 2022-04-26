@extends('app')

@section('content')
    <div>
        {{ Auth::user()->name }}
        {{ Auth::user()->niveau }}

    </div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-3" id="catalogue">
                <div class=" card-body text-center">
                    <h5>Gestion Produits</h5>
                    <a href="{{route('backofficeProduits.index')}}">
                        <img src="/img/produits.jpeg" alt="" height="200">
                    </a>
                </div>
            </div>
            <div class="col-md-3" id="catalogue">
                <div class="card-body text-center">
                    <h5>Gestion Catégories</h5>
                    <a href="{{route('backofficeCategories.index')}}">
                        <img src="/img/categories.png" alt="" height="200">
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
