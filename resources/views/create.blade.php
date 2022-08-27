{{--  Récupère la template de base --}}
@extends('layouts.app')

{{-- Renvoi en tant que content les informations dans @section --}}
@section('content')

<h1>Création d'un nouveau post</h1>

{{-- Envoi les informations vers posts.store --}}
<form method="post" action=" {{ route('posts.store') }}">

    {{-- Crée un token csrf (obligatoire sinon erreur 419) --}}
    @csrf

    <label for="title">Titre:</label>
    <input type="text" name="title" class="form-control">

    <br>

    <label for="content">Contenu du post:</label>
    <textarea name="content" cols="30" rows="10" class="form-control"></textarea>

    <input type="submit" class="btn btn-primary mt-3" value="Créer">

</form>

@endsection