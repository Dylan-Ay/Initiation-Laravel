{{--  Récupère la template de base --}}
@extends('layouts.app')

{{-- Renvoi en tant que content les informations dans @section --}}
@section('content')

<h1>Modification du post</h1>

<form method="post" action=" {{ route('posts.update', ['id' => $post->id]) }}">

    {{-- Crée un token csrf (obligatoire sinon erreur 419) --}}
    @csrf

    @method("PATCH")

    <input type="hidden" name="id" value="{{$post->id}}">

    <label for="title">Titre:</label>
    <input type="text" name="title" class="form-control" value="{{$post->title}}">

    <br>

    <label for="content">Contenu du post:</label>
    <textarea name="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>

    <input type="submit" class="btn btn-primary mt-3" value="Modifier">

</form>

@endsection