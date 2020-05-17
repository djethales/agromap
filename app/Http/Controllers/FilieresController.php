<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilieresController extends Controller
{
    public function index(){

        $categories = Category::find(2);
        $posts = $categories->posts;
        
        return view('Filieres.index',compact('posts'));
    } 


    
    public function show($name){
        
        $post = Post::find($name);
        
        return view('Filieres.show',compact('post'));
    }  //
}