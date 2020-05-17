<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class ServicesController extends Controller
{
    
    
    public function index(){

        $categories = Category::find(1);
        $posts = $categories->posts;
        
        return view('Services.index',compact('posts'));
    } 


    
    public function show($name){
        
        $post = Post::find($name);
        
        return view('Services.show',compact('post'));
    }
}