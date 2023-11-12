<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
        $images = Gallery::orderBy('created_at', 'desc')->paginate(10);
        return view('gallery.index')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and maximum file size as needed
        ]);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $uploadedImageNames = [];

            foreach ($images as $image) {
                $fileNameWithExt = $image->getClientOriginalName();
                // get just filename
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // get just extension
                $fileExtension = $image->getClientOriginalExtension();
                // filename to store
                $fileNameToStore = $filename . '_' . time() . '.' . $fileExtension;
                // upload image
                $path = $image->storeAs('public/images', $fileNameToStore);
                $uploadedImageNames[] = $fileNameToStore;
            }

            $post = new Gallery();
            $post->title = trim($request->input('title'));
            $post->images = implode(',', $uploadedImageNames);
            $res = $post->save();

            if ($res) {
                // Return a response or redirect as per your application logic
                return back()->with('success', 'Your image upload has been successful');
            }
        } else {
            // Handle the case where no images were uploaded
            return back()->with('error', 'No image was uploaded');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
