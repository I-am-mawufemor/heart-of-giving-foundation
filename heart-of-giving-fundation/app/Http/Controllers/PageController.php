<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeEvent;
use App\Models\UpcomingEvent;
use Illuminate\Http\Request;

//use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    //index page 
    /*public function handleAction(Request $request, $action = null)
    {
        if ($action === 'action1') {



            return view('Pages.index')->with('action', 'Action 1');
        } elseif ($action === 'action2') {
            return view('Pages.index')->with('action', 'Action 2');
        } elseif ($action === 'action3') {
            # code...
            return view('Pages.index')->with('action', 'Áction 3');
        }
        return view('Pages.index')->with('action', 'Default Action');
    }*/


    public function index()
    {
        // fetch upcoming event data
        $upcoming_event_post = UpcomingEvent::all();

        // fetch home event data
        $home_event_post = HomeEvent::all();

        // pass variable name without dollar sign 
        return view('Pages.index', compact('home_event_post', 'upcoming_event_post'));
    }
}
