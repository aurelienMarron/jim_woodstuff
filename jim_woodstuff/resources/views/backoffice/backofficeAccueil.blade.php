<?php

//print_r($user);
//print_r($user['_token']);
//var_dump($user);

    ?>
@extends('app')

@section('content')
    <div>
        {{ Auth::user()->name }}
        {{ Auth::user()->niveau }}

    </div>

@endsection
