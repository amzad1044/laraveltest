<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FrontController extends Controller
{
    public function index()
    {
    	$sec1_post = Post::where('section',1)->where('status',1)->take(4)->get();
    	$sec2_post = Post::where('section',2)->where('status',1)->take(4)->get();

    	$sec1_big_post = Post::where('section',1)->where('status',1)->orderBy('id','desc')->take(1)->get();
    	$sec2_big_post = Post::where('section',2)->where('status',1)->orderBy('id','desc')->take(1)->get();

    	return view('front.home.home',[
    		'post_sec1' => $sec1_post,
    		'post_sec2' => $sec2_post,
    		'post_big_sec1' => $sec1_big_post,
    		'post_big_sec2' => $sec2_big_post,
    	]);
    }
    public function SinglePost($id)
    {
    	$single = Post::find($id);
    	return view('front.home.single',['singlepost' => $single]);
    }
}
