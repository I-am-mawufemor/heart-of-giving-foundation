<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function events()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('admin.event-projects')->with('posts', $user->posts);
    }

    public function galleries()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('admin.galleries')->with('galleries', $user->galleries);
    }

    public function contacts()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        // Debugging: Check if contacts are retrieved
        // dd($user->contacts);
        return view('admin.contacts')->with('contacts', $user->contacts);
    }

    // about method
    public function aboutUs()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('admin.aboutUs')->with('about', $user->about);
    }

    // upcoming events method 
    public function UpcomingEvents()
    {
    }
    public function homeEvent()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('admin.homeEvent')->with('posts', $user->homeEvent);
    }

    /*public function postCount()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $postCount = $user->posts->count();

        return view('admin.dashboard', ['postCount' => $postCount]);
    }*/


    public function dashboard($type = null)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        if ($type === 'image') {
            // Perform image count logic
            $count = $user->galleries()->count();
        } else {
            // Default to post count
            $count = $user->posts()->count();
        }

        return view('admin.dashboard', ['count' => $count, 'type' => $type]);
    }
}
