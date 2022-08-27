{{--  Récupère la template de base --}}
@extends('layouts.app')

{{-- Renvoi en tant que content les informations dans @section --}}
@section('content')

    <h1>Liste des articles</h1>
<section id="articles-list" class="d-flex flex-column gap-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    {{-- Si le tableau $posts n'est pas vide on affiche ses titres --}}

    @if ($posts->count() > 0)

        @foreach($posts as $post)
        <div class="d-flex justify-content-between">
            <h3> 
                {{-- Injecte l'ID pour posts.show --}}
                <a href="{{ route('posts.show', ['id' => $post->id]) }}"> 
                    {{ $post->title }}
                </a>
            </h3>
            <div class="d-flex justify-content-between">
                
                <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-primary me-3">Modifier l'article</a>

                <form action="{{ route('posts.delete',$post->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    
                    <button type="submit" class="btn btn-outline-danger show_confirm">Supprimer l'article</button>
                </form>
            </div>

        </div>
        @endforeach
    @else
        <span>Aucun post en base de données</span>
    @endif

</section>

@endsection