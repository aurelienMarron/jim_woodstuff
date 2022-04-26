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

    <form method="post" action="{{route('backofficeCategories.store')}}">
        @csrf
        <ul>
            <li><input type="text" name="nom" placeholder="nom"></li>
            <li><input type="text" name="description" placeholder="description"></li>
        </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Création de la catègorie</button>
    </form>

@endsection
