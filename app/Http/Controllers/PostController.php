<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //show All
    public function index(){
        $posts= Post::all();
        return view('Allposts',['post'=>$posts]);
    }

    //getting specfic values
    public function show($id){
        $post= Post::find($id);
       // dd($post);
        return view('viewPost',['post'=>$post]);
    }

    //latest
    public function latest(){
        $posts= Post::latest()->get();
        return view('welcome',['post'=>$posts]);
    }

    public function create(){
        return view('create');
    }
    public function store(){
        $post= new Post();
        $post->title = request('title');
        $post->description = request('description');
        $post->content = request('content');
        $post->save();

        return redirect('Allposts')->with('mssg', 'post created');
    }
    public function destroy($id){
        $post= Post::findorFail($id);
        $post->delete();
        return redirect('Allposts')->with('mssg', 'post deleted');
    }
}