<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

use DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        //$posts = DB::select('select * from posts );
        //posts = Post::orderBy('id', 'desc')->take(2)->get();
        $posts =  Post::orderBy('id', 'desc')->paginate(15); //add pagination
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'fullName' => 'required',
            'Occupation' => 'required',
            'Qualification' => 'required',
            'age' => 'required',
            'level' => 'required',
            'gender' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'price' => 'required',
            'district' => 'required',
            'town' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'medium' => 'required',
            'tutiontype' => 'required',
            'cover_image' => 'image|nullable',

        ]);

        //Handel file Upload

        //handle the file upload
        if ($request->hasFile('cover_image')) {

            //get file name with extensions
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET the ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //Create Post
        $post = new Post;
        $post->fullName = $request->input('fullName');
        $post->Occupation = $request->input('Occupation');
        $post->Qualification = $request->input('Qualification');
        $post->age = $request->input('age');
        $post->level = $request->input('level');
        $post->gender = $request->input('gender');
        $post->subject = $request->input('subject');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->district = $request->input('district');
        $post->town = $request->input('town');
        $post->email = $request->input('email');
        $post->mobile = $request->input('mobile');
        $post->medium = $request->input('medium');
        $post->tutiontype = $request->input('tutiontype');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);

        //check for correct user
        if (auth()->user()->id !== $post->user_id) {

            return redirect('/posts')->with('error', 'Unauthorized Page');
        }


        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'fullName' => 'required',
            'Occupation' => 'required',
            'Qualification' => 'required',
            'age' => 'required',
            'level' => 'required',
            'gender' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'price' => 'required',
            'district' => 'required',
            'town' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'medium' => 'required',
            'tutiontype' => 'required',
            'cover_image' => 'image|nullable',

        ]);

        //Handel file Upload

        //handle the file upload
        if ($request->hasFile('cover_image')) {

            //get file name with extensions
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET the ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //Create Post
        $post =  Post::find($id);
        $post->fullName = $request->input('fullName');
        $post->Occupation = $request->input('Occupation');
        $post->Qualification = $request->input('Qualification');
        $post->age = $request->input('age');
        $post->level = $request->input('level');
        $post->gender = $request->input('gender');
        $post->subject = $request->input('subject');
        $post->description = $request->input('description');
        $post->price = $request->input('price');
        $post->district = $request->input('district');
        $post->town = $request->input('town');
        $post->email = $request->input('email');
        $post->mobile = $request->input('mobile');
        $post->medium = $request->input('medium');
        $post->tutiontype = $request->input('tutiontype');
        $post->user_id = auth()->user()->id;

        if ($request->hasFile('cover_image')) {
            $post->cover_image = $fileNameToStore;
        }

        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //check for correct user
        if (auth()->user()->id !== $post->user_id) {

            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        if ($post->cover_image != 'noimage.jpg') {

            Storage::delete('public/cover_images/' . $post->cover_image);
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post Deleted');
    }
}