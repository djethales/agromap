<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class ProjetsController extends Controller
{
    public function index(){
        $categories = Category::find(3);
        $posts = $categories->posts;
        
        return view('Projets.index',compact('posts'));
    } 


    
    public function show($name){
        
        $post = Post::find($name);
        
        return view('Projets.show',compact('post'));
    }
}