<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /**

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // fetch data 
        $post = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('event.index')->with('post', $post);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //redirect to create page
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //input data into database
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        // handle file upload
        if ($request->hasFile('cover_image')) {
            # code...
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get just extension 
            $fileExtension = $request->file('cover_image')->getClientOriginalExtension();
            // filename to store 
            $fileNameToStore = $filename . '_' . time() . '.' . $fileExtension;
            //upload image image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Post();
        $post->title = trim($request->title);
        $post->body = trim($request->body);
        $post->cover_image = trim($fileNameToStore);
        $res = $post->save();
        if ($res) {
            return back()->with('success', 'Event posted successfully');
        } else {
            return back()->with('error', 'Failed to post event');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('event.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('event.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        // handle file upload
        if ($request->hasFile('cover_image')) {
            # code...
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get just extension 
            $fileExtension = $request->file('cover_image')->getClientOriginalExtension();
            // filename to store 
            $fileNameToStore = $filename . '_' . time() . '.' . $fileExtension;
            //upload image image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }


        $post = Post::find($id);
        $post->title = trim($request->title);
        $post->body = trim($request->body);
        if ($request->hasFile('cover_image')) {
            $post->cover_image = trim($fileNameToStore);
        }
        $res = $post->save();
        if ($res) {
            return back()->with('success', 'Event post successfully updated');
        } else {
            return back()->with('error', 'Failed to update event');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        if ($post->cover_image != 'noimage.jpg') {
            // delete image
            Storage::delete('public/cover_images/' . $post->cover_image);
        }

        $post->delete();
        return redirect('/event')->with('success', 'Post deleted successfully');
    }
}
