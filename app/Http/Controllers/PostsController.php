<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use Session;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth',["except"=>["index","show"]]);
    }

    public function index()
    {
        $posts = Post::get();
        return view('posts',["posts"=>$posts]);
    }
    public function myPost(){
        //fetch currenty logged-in user object
        $user_id = Auth::user()->id; 
        $posts = Post::where('user_id',$user_id)->get();
        return view('posts',["posts"=>$posts]);
    }
    public function show($id){
        $post_id = $id;
        $posts = Post::where('id',$post_id)->first();
        return view('single',["post"=>$posts]);
    }
    public function addPost(){
        return view('add_post');
    }
    public function savePost(Request $request){
        // dd($request);
        $user_id = Auth::user()->id;

        $request->validate([
            'post_title' => 'required',
            'post_description' => 'required',
            ],
        );
        // $postCreated=null;
        $postCreated = Post::create(
            [
            "post_title"=>$request->post_title,
            "post_description"=>$request->post_description,
            "user_id"=>$user_id,
            ]
        );
        if($postCreated){
            Session::flash("success","Post has been created");
        }else{
            Session::flash("failed","Post didn't created");
        }
        
       return back();
    }
}
