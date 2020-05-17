<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();


        return view("admin.posts.create",compact("categories"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = Request()->validate([
            'title' => 'required',
            'content' => 'required',
            'categories'=>'required',
            'image'=> 'image',
        ]);

        $image = $request->file('image');

        if(isset($image)){

            //$pathImage = request("image")->store('uploads', 'public');
            //$img = Image::make(public_path("/uploads/{$pathImage}"))->fit(1200, 1200);
            $pathImage = rand().'_'.time().'_'.uniqid(). '.'.$image->getClientOriginalExtension();
            $image->move(public_path('imgposts'),$pathImage);



        }else{
            $pathImage = "uploads/default.png";
        }

        $post = new Post();


            $post->title = $data["title"];
            $post->slug = Str::slug($data["title"],'-');
            $post->content = Purifier::clean($data["content"]);
            $post->image = $pathImage;

            $post->save();


        $post->categories()->attach($request->categories);

        return redirect()->route('admin.posts.edit',["post" => $post->id ])->with('toast_success',"l'article ". $post->title . 'à été bien  enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {


        $categories = Category::all();

        return view("admin.posts.edit",[
            'post' => $post,
            'categories' => $categories,
        ]

        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

       $data = Request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'sometimes|image'

        ]);


           if(request("image")){
                //Storage::disk('public')
               $pathImage = rand().'_'.time().'_'.uniqid(). '.'.request("image")->getClientOriginalExtension();
               request("image")->move(public_path('imgposts'),$pathImage);

               // $pathImage = request("image")->store('uploads', 'public');
                //$img = Image::make(public_path("/storage/{$pathImage}"))->fit(1200, 1200);
                //                                             $img->save();

                $post->update(array_merge(
                    $data,
                    ['image' => $pathImage])
                );
            }else{
                $post->update($data);
            }

        $post->categories()->sync($request->categories);

        return redirect()->route('admin.posts.edit',['post'=>$post->id])->with('toast_success',"l'article ".$post->title." a été bien modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        $post->categories()->detach();
        $post->delete();

        return redirect()->route('admin.posts.index');

    }
}
