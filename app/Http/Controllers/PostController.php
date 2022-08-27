<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Index des articles
    public function index(){

        // Equivaut à findAll() sur Symfony
        // $posts = Post::all();

        //On utilise le model Post et on trie par ASC title
        $posts = Post::orderBy('title')->get();

        //Die and dump
        //dd($posts);

        // Compact permet de faire passer le tableau '$posts' à la view
        // return view('articles', compact('posts'));
        
        //Autre façon de faire :
        return view('articles')->with('posts', $posts);
    }

    // View créer un article
    public function create()
    {
        return view('create');
    }

    // Permet de traiter les données reçu dans le form et de les envoyer en db
    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('/home')->with('status', 'Le post a bien été crée');
    }
    // Affiche la page d'edit d'un article
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('edit')->with('post', $post);
    }

    // Update des données de l'article
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $input = $request->all();
        $post->update($input);

        return redirect('/home')->with('status', 'L\'article a bien été mise à jour');
    }
    
    // Permet de supprimer l'article
    public function delete($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('/home')->with('status', "Le post a bien été supprimé");
    }

    // Affiche le détail d'un article
    public function show($id)
    {
        // Equivaut à findById() sur Symfony et renvoi 404 si n'existe pas

        $post = Post::findOrFail($id);

        // Equivaut à findBy() sur Symfony et renvoi 404 si n'existe pas
        // $post = Post::where('title', 'Explicabo quisquam impedit labore nemo.')->firstOrFail();

        return view('article',[
            'post' => $post
        ]);
    }

    //Page contact
    
    public function contact()
    {
        return view('contact');
    }
}