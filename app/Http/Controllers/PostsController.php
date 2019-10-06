<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = DB::select('SELECT * FROM posts');
        // return Post::where('title', 'Post 2')->get();
        //$posts = Post::all();
        // $posts = Post::orderBy('title', 'desc')->get();

        $posts = Filme::orderBy('created_at', 'desc')->paginate(0);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nomefilme' => 'required',
            'autorfilme' => 'required'
        ]);

        // Criar a publicação

        $post = new Filme;
        $post->nomefilme = $request->input('nomefilme');
        $post->autorfilme = $request->input('autorfilme');
        $post->save();

        return redirect('/posts')->with('success', 'Publicação Criada com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Filme::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Filme::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nomefilme' => 'required',
            'autorfilme' => 'required'
        ]);

        // Criar a publicação

        $post = Filme::find($id);
        $post->nomefilme = $request->input('nomefilme');
        $post->autorfilme = $request->input('autorfilme');
        $post->save();

        return redirect('/posts')->with('success', 'Publicação atualizada com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Filme::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Filme Excluído com sucesso!');
    }
}
