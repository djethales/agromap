<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    private $months = [
                    'janvier','février','mars','avril',
                    'mai','juin','juillet','août',
                    'septembre','octobre','novembre','décembre',
    ];

    private $days = [
        'lundi','mardi','mercredi','jeudi', 'vendredi','samedi','dimanche',
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $month = $this->toMonth();
        $day = $this->toDay();

        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        $categories = Category::orderBy('created_at','desc')->limit(6)->get();

        return view('home',compact('posts','categories','month','day'));
    }


    private function toMonth(){
        return  $this->months[Str::replaceFirst('0','',now()->format('m')) -1 ];

    }

    private function toDay(){

        //return $this->days[Carbon::parse(now())->dayOfWeek - 1];
    }
}
