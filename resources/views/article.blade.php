{{--  Récupère la template de base --}}
@extends('layouts.app')

{{-- Renvoi en tant que content les informations dans @section --}}
@section('content')

    <h1> {{$post->title}} </h1>

    <p> {{$post->content}} </p>

    <ul class="p-0 list-unstyled">
        <li>
            <small>Article crée le : {{$post->created_at->format('d-m-Y à H:m:s')}} </small>
        </li>
        <li>
            <small>Article mise à jour le : {{$post->updated_at->format('d-m-Y à H:m:s')}}</small>
        </li>
    </ul>

@endsection