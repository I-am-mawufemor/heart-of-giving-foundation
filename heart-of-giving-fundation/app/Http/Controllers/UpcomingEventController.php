<?php

namespace App\Http\Controllers;

use App\Models\UpcomingEvent;
use Illuminate\Http\Request;

class UpcomingEventController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create upcoming method
        return view('upcomingEvent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //upcoming event store method
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

        $post = new UpcomingEvent();
        $post->title = trim($request->title);
        $post->body = trim($request->body);
        $post->cover_image = trim($fileNameToStore);
        $res = $post->save();
        if ($res) {
            return back()->with('success', 'Upcoming event successfully');
        } else {
            return back()->with('error', 'Failed to post upcoming event event');
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
