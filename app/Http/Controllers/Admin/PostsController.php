<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    public function create(){

        $categories = Category::all();

        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request){

        //Validación del formulario para crear un post y posteriormente guardarlo en la basde de datos
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'excerpt' => 'required'
        ]);


        //Guardar Post en la Base de datos
        // return Post::create($request->all());
        $post = new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->excerpt = $request->get('excerpt');
        $post->published_at = $request->filled('published_at') ? Carbon::parse($request->get('published_at')) : null;
        //Aquí con el $request->filled le decimos que si tiene una fecha aplique el Carbon para guardar la fecha, sin embargo si
        //nosotros no ponemos una fecha en el formulario a la hora de crear el post, se guardaría cómo null
        $post->category_id = $request->get('category');
        $post->save();

        return back()->with('flash', 'Post añadido exitosamente');
    }
}
