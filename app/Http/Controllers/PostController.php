<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $lists=DB::table('posts')
//            ->select('posts.id','posts.title','posts.description','photos.location',"posts.created_at")
//            ->join('photos','post_id','=','posts.id')
//            ->get();
        $lists = Post::latest()->get();
//        $photos = Post::find(6)->photos;

//        foreach ($photos as $photo) {
//            //
//        }
//        $lists = DB::table('posts')->get();
//        $photos = DB::table('photos')->get();
        return view("post.create",compact("lists"));
//        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        return $request;
        if ($request->hasFile("images")) {

            if (count($request->file("images")) > 4) {

                return redirect()->back()->withErrors(["images.*" => "image must be equal or less than 4"]);

            } else {

                $request->validate([

                    "images.*" => "mimes:jpeg,png|max:1000",
                    "title"=>"required",
                    "description" => "required"

                ]);

                $store = "gallery_photo";


                $post = new Post();
                $post->title=$request->title;
                $post->description = $request->description;
                $post->save();


                foreach ($request->file("images") as $photo) {
                    $newName = uniqid() . "_gallery." . $photo->getClientOriginalExtension();
                    $fullPath = $store . "/" . $newName;
                    $photo->move($store, $newName);
                    $photo = new Photo();
                    $photo->post_id = $post->id;
                    $photo->location = $fullPath;
                    $photo->save();

                }

//                return redirect()->back()->withErrors(["images.*" => "there is no file"]);
                return redirect()->route("post.create")->with("status","$request->title Post Added");


            }

        } else {

            return redirect()->back()->withErrors(["images.*" => "there is no file"]);
        }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
