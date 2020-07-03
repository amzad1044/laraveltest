<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Image;

class PostController extends Controller
{

	protected function validatePost($request)
    {
    	$this->validate($request,[
    		'title' => 'required|unique:posts',
    		'body' => 'required',
    		'type' => 'required',
    		'status' => 'required',
    		'section' => 'required',
    		'image' => 'required'

    	]);  
    }
    protected function imageUpload($request)
    {
    	$img = $request->file('image');
    	$imageName = $img->getClientOriginalName();
    	$dir = 'image/';
    	$imgUrl = $dir.$imageName;

    	//$img->move($dir,$imageName);
    	Image::make($img)->resize(1100,500)->save($imgUrl);
    	return $imgUrl;
    }
    protected function insertPost($request,$imgUrl){
    	$post = new Post();
    	$post->title = $request->title;
    	$post->body = $request->body;
    	$post->type = $request->type;
    	$post->status = $request->status;
    	$post->section = $request->section;
    	$post->image = $imgUrl;
    	
    	$post->save();
    }

    public function save(Request $request)
    {
    	$this->validatePost($request);
    	$imgUrl = $this->imageUpload($request);
    	$this->insertPost($request,$imgUrl);
    	return redirect()->back();
    }
    public function Published($id)
    {
    	$post = Post::find($id);
        $post->status = 1;
        $post->save();

        return redirect()->back();
    }
    public function unPublished($id)
    {
        $post = Post::find($id);
        $post->status = 0;
        $post->save();

        return redirect()->back();
    }
}
