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

    <form method="post" action="{{route('backofficeCategories.update',[$categorie])}}">
        @method('PUT')
        @csrf
        <ul>
            <li><input type="text" name="nom" value="{{$categorie->nom}}"></li>
            <li><input type="text" name="description" value="{{$categorie->description}}"></li>
        </ul>
        <button type="submit" class="btn btn-dark btn-outline-light">Modification de la catègorie</button>
    </form>

@endsection
